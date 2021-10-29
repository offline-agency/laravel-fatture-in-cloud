<?php

namespace OfflineAgency\FattureInCloud;

use Exception;
use Illuminate\Support\Arr;
use OfflineAgency\FattureInCloud\Events\DocumentRequestPerformed;

class Auth
{
    private $attempts;
    private $params = [];

    /**
     * @param  string  $apiUid
     * @param  string  $apiKey
     *
     * @throws Exception
     */
    public function __construct(
        string $apiUid = '',
        string $apiKey = ''
    ) {
        $this->attempts = 0;

        if (empty($apiUid) || empty($apiKey)) {
            throw new \Exception('You need to pass apiUid and apiKey');
        }

        $this->params = [
            'api_uid' => $apiUid,
            'api_key' => $apiKey,
        ];
    }

    /**
     * @param  string  $url
     * @param  array  $data
     * @param  string  $method
     * @param  array  $additional_data
     * @param  string  $action
     * @param  string  $type
     * @return mixed|object
     */
    private function call(
        string $url = '',
        array $data = [],
        string $method = 'post',
        array $additional_data = [],
        string $action = '',
        string $type = ''
    ) {
        try {
            $url = config('fatture-in-cloud.endpoint').$url;

            $options = [
                'http' => [
                    'header' => "Content-type: text/json\r\n",
                    'method' => $method,
                    'content' => json_encode($data),
                ],
            ];

            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);

            $parsed_header = $this->parseHeaders(
                $http_response_header
            );

            $response_code = Arr::has($parsed_header, 'reponse_code')
                ? Arr::get($parsed_header, 'reponse_code')
                : null;

            $attempts = $this->attempts;
            $times = config('fatture-in-cloud.times', 3);
            if (
                $attempts < $times
                && $response_code == 404
            ) {
                $this->attempts++;

                usleep(config('fatture-in-cloud.sleep-seconds', 5000000));

                $this->call(
                    $url,
                    $data,
                    $method,
                    $additional_data,
                    $action,
                    $type
                );
            } else {
                throw new \Exception('OA0002 - 404 on response');
            }

            $response = $this->parseResponse(
                $response,
                $url,
                $data,
                $method,
                $additional_data,
                $action,
                $type
            );

            event(new DocumentRequestPerformed(
                $type,
                $action,
                $data,
                $additional_data,
                $response,
                $parsed_header
            ));

            return $response;
        } catch (Exception $e) {
            $response = (object) [
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
                'success' => false,
            ];

            event(new DocumentRequestPerformed(
                $type,
                $action,
                $data,
                $additional_data,
                $response,
                $this->parseHeaders($http_response_header)
            ));

            return (object) [
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
                'success' => false,
            ];
        }
    }

    /**
     * @param $response
     * @param $url
     * @param $data
     * @param $method
     * @param $additional_data
     * @param $action
     * @param $type
     * @return mixed
     *
     * @throws Exception
     */
    private function parseResponse(
        $response,
        $url,
        $data,
        $method,
        $additional_data,
        $action,
        $type
    ) {
        $json = json_decode($response);
        if (
            isset($json->error)
            && isset($json->error_code)
        ) {
            $timeout_errors_codes = config('fatture-in-cloud.timeout-errors-codes');
            if (in_array($json->error_code, $timeout_errors_codes)) {
                $this->handleThrottle(
                    $json,
                    $url,
                    $data,
                    $method,
                    $additional_data,
                    $action,
                    $type
                );
            } else {
                throw new \Exception($json->error, $json->error_code);
            }
        }

        return $json;
    }

    /**
     * @param $json
     * @param $url
     * @param $data
     * @param $method
     * @param $additional_data
     * @param $action
     * @param $type
     *
     * @throws Exception
     */
    private function handleThrottle(
        $json,
        $url,
        $data,
        $method,
        $additional_data,
        $action,
        $type
    ) {
        $attempts = $this->attempts;
        $times = config('fatture-in-cloud.times', 3);

        if ($attempts < $times) {
            $this->attempts++;
            $seconds = $this->getRetrySeconds(
                $json->error
            );

            $seconds = $seconds * 1000;
            usleep($seconds);

            $this->call(
                $url,
                $data,
                $method,
                $additional_data,
                $action,
                $type
            );
        } else {
            throw new \Exception('OA0001 - Timeout error');
        }
    }

    /**
     * @param $error_message
     * @return float|int
     */
    private function getRetrySeconds(
        $error_message
    ) {
        $seconds = 0;
        $split_error_message = explode('Attendi ', $error_message);
        if (count($split_error_message) > 1) {
            $split_error_message = explode(' secondi', $split_error_message[1]);
            $seconds = (int) $split_error_message[0];
        }

        return $seconds * 1000;
    }

    /**
     * @param $path
     * @param  array  $data
     * @param  array  $additional_data
     * @param  string  $action
     * @param  string  $type
     * @return mixed|object
     */
    public function post(
        $path,
        array $data = [],
        array $additional_data = [],
        string $action = '',
        string $type = ''
    ) {
        $params = array_merge($this->params, $data);

        return $this->call(
            $path, $params,
            'POST',
            $additional_data,
            $action,
            $type
        );
    }

    /**
     * @param $headers
     * @return array
     */
    private function parseHeaders(
        $headers
    ): array {
        $head = [];
        foreach ($headers as $k => $v) {
            $t = explode(':', $v, 2);
            if (isset($t[1])) {
                $head[trim($t[0])] = trim($t[1]);
            } else {
                $head[] = $v;
                if (preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#", $v, $out)) {
                    $head['reponse_code'] = intval($out[1]);
                }
            }
        }

        return $head;
    }
}
