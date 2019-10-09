<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Anagrafica as Request;

class Anagrafica extends FattureInCloud
{
    protected $soggetto = 'clienti';

    public function lista($data = [])
    {
        Request::lista($data);

        return $this->auth->post("{$this->soggetto}/lista", $data);
    }

    public function nuovo($data = [])
    {
        Request::nuovo($data);

        return $this->auth->post("{$this->soggetto}/nuovo", $data);
    }

    public function importa($data = [])
    {
        Request::importa($data);

        return $this->auth->post("{$this->soggetto}/importa", $data);
    }

    public function modifica($data = [])
    {
        Request::modifica($data);

        return $this->auth->post("{$this->soggetto}/modifica", $data);
    }

    public function elimina($data = [])
    {
        Request::elimina($data);

        return $this->auth->post("{$this->soggetto}/elimina", $data);
    }
}
