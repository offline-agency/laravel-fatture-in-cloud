<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Anagrafica as Request;

class Anagrafica extends FattureInCloud
{
    protected $soggetto = 'clienti';

    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function lista($data = [])
    {
        Request::lista($data);

        return $this->auth->post("{$this->soggetto}/lista", $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function nuovo($data = [])
    {
        Request::nuovo($data);

        return $this->auth->post("{$this->soggetto}/nuovo", $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     *
     * @throws \Exception
     */
    public function importa($data = [])
    {
        Request::importa($data);

        return $this->auth->post("{$this->soggetto}/importa", $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function modifica($data = [])
    {
        Request::modifica($data);

        return $this->auth->post("{$this->soggetto}/modifica", $data);
    }

    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function elimina($data = [])
    {
        Request::elimina($data);

        return $this->auth->post("{$this->soggetto}/elimina", $data);
    }
}
