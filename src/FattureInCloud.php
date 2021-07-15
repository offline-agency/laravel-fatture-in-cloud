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
        $this->auth = app(Auth::class, ['apiUid' => config('fatture-in-cloud.api_uid'), 'apiKey' => config('fatture-in-cloud.api_key')]);
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
