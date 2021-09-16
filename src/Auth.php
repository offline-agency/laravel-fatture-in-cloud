<?php

namespace OfflineAgency\FattureInCloud;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Auth
{
    private $errors = [];
    private $params = [];

    /**
     * Auth constructor.
     *
     * @param  string  $apiUid
     * @param  string  $apiKey
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
     * @param  string  $url
     * @param  array  $data
     * @param  string  $method
     * @return array|mixed
     */
    private function call($url = '', $data = [], $method = 'POST')
    {
        try {
            $url = config('fatture-in-cloud.endpoint').$url;
            $method = Str::lower($method);
            if($method === 'post'){
              $result = Http::withHeaders([
                "Content-type" => 'text/json'
              ])
                ->post($url,$data );
            }else if($method === 'get'){
              $result = Http::withHeaders([
                "Content-type" => 'text/json'
              ])
                ->get($url,$data );
            }else{
              throw new Exception('Unknown method ' . $method);
            }
            return $result->json();
        } catch (Exception $e) {
            return (object) [
                'error'   => $e->getMessage(),
                'code'    => $e->getCode(),
                'success' => false,
            ];
        }
    }

    /**
     * Parse response.
     *
     * @param $response
     * @return mixed
     *
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
     * @param  array  $data
     * @return mixed|string
     */
    public function post($path, $data = [])
    {
        $params = array_merge($this->params, $data);

        return $this->call($path, $params, 'POST');
    }
}
