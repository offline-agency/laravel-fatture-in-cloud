<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Mail as Request;

class Mail extends FattureInCloud
{
    public function getLista($data = [])
    {
        Request::lista($data);

        return $this->auth->post('mail/lista', $data);
    }
}
