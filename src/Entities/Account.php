<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Account as Request;

class Account extends FattureInCloud
{
    public function getInfo($data = [ 'nome' ])
    {
        Request::info($data);

        return $this->auth->post('info/account', $data);
    }
}
