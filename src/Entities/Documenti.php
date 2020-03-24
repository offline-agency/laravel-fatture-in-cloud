<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Documenti as Request;

class Documenti extends FattureInCloud
{
    protected $docType = 'fatture';

    /**
     * @param array $data
     * @return mixed|string
     */
    public function lista($data = [])
    {
        Request::lista($data);

        return $this->auth->post("{$this->docType}/lista", $data);
    }

    /**
     * @param array $data
     * @return mixed|string
     */
    public function dettagli($data = [])
    {
        Request::dettagli($data);

        return $this->auth->post("{$this->docType}/dettagli", $data);
    }

    /**
     * @param array $data
     * @return mixed|string
     */
    public function nuovo($data = [])
    {
        Request::nuovo($data);

        return $this->auth->post("{$this->docType}/nuovo", $data);
    }

    /**
     * @param array $data
     * @return mixed|string
     */
    public function modifica($data = [])
    {
        Request::modifica($data);

        return $this->auth->post("{$this->docType}/modifica", $data);
    }

    /**
     * @param array $data
     * @return mixed|string
     */
    public function elimina($data = [])
    {
        Request::elimina($data);

        return $this->auth->post("{$this->docType}/elimina", $data);
    }

    /**
     * @param array $data
     * @return mixed|string
     */
    public function info($data = [])
    {
        Request::info($data);

        return $this->auth->post("{$this->docType}/info", $data);
    }
}
