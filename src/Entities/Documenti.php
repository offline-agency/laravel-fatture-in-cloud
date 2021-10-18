<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\Events\DocumentRequestPerformed;
use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Documenti as Request;

class Documenti extends FattureInCloud
{
    protected $docType = 'fatture';

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function lista($data = [])
    {
        Request::lista($data);

        $response = $this->auth->post("{$this->docType}/lista", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'lista',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function dettagli($data = [])
    {
        Request::dettagli($data);

        $response = $this->auth->post("{$this->docType}/dettagli", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'dettagli',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function nuovo($data = [])
    {
        Request::nuovo($data);

        $response = $this->auth->post("{$this->docType}/nuovo", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'nuovo',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function modifica($data = [])
    {
        Request::modifica($data);

        $response = $this->auth->post("{$this->docType}/modifica", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'modifica',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function elimina($data = [])
    {
        Request::elimina($data);

        $response = $this->auth->post("{$this->docType}/elimina", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'elimina',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function info($data = [])
    {
        Request::info($data);

        $response = $this->auth->post("{$this->docType}/info", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'info',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @return array|mixed|object|string
     * @throws \Exception
     */
    public function infoMail($data = [])
    {
        Request::infoMail($data);

        $response = $this->auth->post("{$this->docType}/infomail", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'infoMail',
            $data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @return array|mixed|object|string
     * @throws \Exception
     */
    public function inviaMail($data = [])
    {
        Request::inviaMail($data);

        $response = $this->auth->post("{$this->docType}/inviamail", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'inviaMail',
            $data,
            $response
        ));

        return $response;
    }
}
