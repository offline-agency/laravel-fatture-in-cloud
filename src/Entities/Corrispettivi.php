<?php


namespace OfflineAgency\FattureInCloud\Entities;


use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Corrispettivi as Request;

class Corrispettivi extends FattureInCloud
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

        return $this->auth->post("corrispettivi/lista", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function dettagli($data = [])
    {
        Request::dettagli($data);

        return $this->auth->post("corrispettivi/dettagli", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function nuovo($data = [])
    {
        Request::nuovo($data);

        return $this->auth->post("corrispettivi/nuovo", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function modifica($data = [])
    {
        Request::modifica($data);

        return $this->auth->post("corrispettivi/modifica", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function elimina($data = [])
    {
        Request::elimina($data);

        return $this->auth->post("corrispettivi/elimina", $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     * @throws Exception
     */
    public function info($data = [])
    {
        Request::info($data);

        return $this->auth->post("corrispettivi/info", $data);
    }

}
