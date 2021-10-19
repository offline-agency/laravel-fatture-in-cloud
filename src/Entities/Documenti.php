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
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function lista(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::lista($data);

        $response = $this->auth->post("{$this->docType}/lista", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'lista',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function dettagli(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::dettagli($data);

        $response = $this->auth->post("{$this->docType}/dettagli", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'dettagli',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function nuovo(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::nuovo($data);

        $response = $this->auth->post("{$this->docType}/nuovo", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'nuovo',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function modifica(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::modifica($data);

        $response = $this->auth->post("{$this->docType}/modifica", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'modifica',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function elimina(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::elimina($data);

        $response = $this->auth->post("{$this->docType}/elimina", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'elimina',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function info(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::info($data);

        $response = $this->auth->post("{$this->docType}/info", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'info',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function infoMail(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::infoMail($data);

        $response = $this->auth->post("{$this->docType}/infomail", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'infoMail',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }

    /**
     * @param array $data
     * @param array $additional_data
     * @return array|mixed|object|string
     */
    public function inviaMail(
        array $data = [],
        array $additional_data = []
    )
    {
        Request::inviaMail($data);

        $response = $this->auth->post("{$this->docType}/inviamail", $data);

        event(new DocumentRequestPerformed(
            $this->docType,
            'inviaMail',
            $data,
            $additional_data,
            $response
        ));

        return $response;
    }
}
