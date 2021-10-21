<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Account as Request;

class Account extends FattureInCloud
{
    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function getInfo($data = ['nome'])
    {
        Request::info($data);

        return $this->auth->post('info/account', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function getGenericInfo($data = ['nome'])
    {
        Request::info($data);

        return $this->auth->post('richiesta/info', $data);
    }
}
