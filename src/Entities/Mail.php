<?php


namespace OfflineAgency\FattureInCloud\Entities;


use Exception;
use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Mail as Request;

class Mail extends FattureInCloud
{
    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function lista($data = [])
    {
        Request::lista($data);

        return $this->auth->post("mail/lista", $data);
    }

}
