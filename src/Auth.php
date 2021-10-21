<?php

namespace OfflineAgency\FattureInCloud;

use Exception;
use OfflineAgency\FattureInCloud\Events\DocumentRequestPerformed;

class Auth
{
    private $attempts;
    private $params = [];

    public function __construct(
        $apiUid = '',
        $apiKey = ''
    )
    {
        $this->attempts = 0;

        if (empty($apiUid) || empty($apiKey)) {
            throw new \Exception('You need to pass apiUid and apiKey');
        }

        $this->params = [
            'api_uid' => $apiUid,
            'api_key' => $apiKey,
        ];
    }

    private function call(
        $url = '',
        $data = [],
        $method = 'post',
        $additional_data = [],
        $action = '',
        $type = ''
    )
    {
        try {
            $url = config('fatture-in-cloud.endpoint') . $url;

            $options = [
                'http' => [
                    'header' => "Content-type: text/json\r\n",
                    'method' => $method,
                    'content' => json_encode($data),
                ],
            ];

            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);

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
                $this->parseHeaders($http_response_header)
            ));

            return $response;
        } catch (Exception $e) {
            $response = (object)[
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

            return (object)[
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
                'success' => false,
            ];
        }
    }

    private function parseResponse(
        $response,
        $url,
        $data,
        $method,
        $additional_data,
        $action,
        $type
    )
    {
        $json = json_decode($response);
        if (
            isset($json->error)
            && isset($json->error_code)
        ) {
            if ($json->error_code == 2002) {
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

    private function handleThrottle(
        $json,
        $url,
        $data,
        $method,
        $additional_data,
        $action,
        $type
    )
    {
        $attempts = $this->attempts;
        $times = config('nom.config', 3);

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
            throw new \Exception('Timeout error', 'OA0001');
        }
    }

    private function getRetrySeconds(
        $error_message
    )
    {
        $seconds = 0;
        $split_error_message = explode('Attendi ', $error_message);
        if (count($split_error_message) > 1) {
            $split_error_message = explode(' secondi', $split_error_message[1]);
            $seconds = (int)$split_error_message[0];
        }
        return $seconds * 1000;
    }

    public function post(
        $path,
        $data = [],
        $additional_data = [],
        $action = '',
        $type = ''
    )
    {
        $params = array_merge($this->params, $data);

        return $this->call(
            $path, $params,
            'POST',
            $additional_data,
            $action,
            $type
        );
    }

    private function parseHeaders(
        $headers
    ): array
    {
        $head = array();
        foreach ($headers as $k => $v) {
            $t = explode(':', $v, 2);
            if (isset($t[1]))
                $head[trim($t[0])] = trim($t[1]);
            else {
                $head[] = $v;
                if (preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#", $v, $out))
                    $head['reponse_code'] = intval($out[1]);
            }
        }
        return $head;
    }
}
