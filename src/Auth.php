<?php

namespace OfflineAgency\FattureInCloud;

use Exception;

class Auth
{
    private $errors = [];
    private $params = [];

    /**
     * Auth constructor.
     *
     * @param string $apiUid
     * @param string $apiKey
     *
     * @throws Exception
     */
    public function __construct($apiUid = '', $apiKey = '')
    {
        $this->errors = config('fatture-in-cloud.errors');

        if (empty($apiUid) || empty($apiKey)) {
            throw new \Exception('You need to pass apiUid and apiKey');
        }

        $this->params = [
            'api_uid' => $apiUid,
            'api_key' => $apiKey,
        ];
    }


    /**
     * Exec API call.
     *
     * @param string $url
     * @param array $data
     * @param string $method
     * @return array|mixed
     */
    private function call($url = '', $data = [], $method = 'post')
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
            $result = file_get_contents($url, false, $context);

            return self::parseResponse($result);
        } catch (Exception $e) {
            return [
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
                'success' => false
            ];
        }
    }

    /**
     * Parse response.
     *
     * @param $response
     *
     * @return mixed
     * @throws Exception
     */
    private function parseResponse($response)
    {
        $json = json_decode($response);
        if (isset($json->error)) {
            throw new \Exception($json->error, $this->errors[$json->error_code]['code']);
        }

        return $json;
    }

    /**
     * POST call.
     *
     * @param $path
     * @param array $data
     *
     * @return mixed|string
     */
    public function post($path, $data = [])
    {
        $params = array_merge($this->params, $data);

        return $this->call($path, $params, 'POST');
    }
}
