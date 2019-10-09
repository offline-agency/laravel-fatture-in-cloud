<?php

namespace OfflineAgency\FattureInCloud;

class FattureInCloud
{
    protected $auth;

    /**
     * FattureInCloud constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $this->auth = new Auth(config('fatture-in-cloud.api_uid'), config('fatture-in-cloud.api_key'));
    }

    /**
     * @return mixed|string
     */
    public function getInfo()
    {
        $data = $this->auth->post('clienti/lista');

        return $data;
    }
}
