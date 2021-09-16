<?php

namespace OfflineAgency\FattureInCloud\Entities;

use Exception;
use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Magazzino as Request;

class Magazzino extends FattureInCloud
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

        return $this->auth->post("arrivimerce/lista", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function dettaglio($data = [])
    {
        Request::dettagli($data);

        return $this->auth->post("arrivimerce/dettaglio", $data);
    }
}
