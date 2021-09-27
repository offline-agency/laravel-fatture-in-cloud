<?php

namespace OfflineAgency\FattureInCloud\Entities;

use Exception;
use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Acquisti as Request;

class Acquisti extends FattureInCloud
{
    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function lista($data = [])
    {
        Request::lista($data);

        return $this->auth->post('acquisti/lista', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function dettagli($data = [])
    {
        Request::dettagli($data);

        return $this->auth->post('acquisti/dettagli', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function nuovo($data = [])
    {
        Request::nuovo($data);

        return $this->auth->post('acquisti/nuovo', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function modifica($data = [])
    {
        Request::modifica($data);

        return $this->auth->post('acquisti/modifica', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function elimina($data = [])
    {
        Request::elimina($data);

        return $this->auth->post('acquisti/elimina', $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws Exception
     */
    public function info($data = [])
    {
        Request::info($data);

        return $this->auth->post('acquisti/info', $data);
    }
}
