<?php

namespace OfflineAgency\FattureInCloud;

use OfflineAgency\FattureInCloud\Auth;

class FattureInCloud {

    protected $auth;

    public function __construct()
    {

        $this->auth = new Auth(env('LARAVEL_API_UID'), env('LARAVEL_API_KEY'));

    }

    public function getInfo() {

        $data = $this->auth->post('clienti/lista');
        return $data;

    }

}