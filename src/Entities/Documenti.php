<?php

namespace OfflineAgency\FattureInCloud\Entities;

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

        return $this->auth->post(
            "{$this->docType}/lista",
            $data,
            $additional_data,
            'lista',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/dettagli",
            $data,
            $additional_data,
            'dettagli',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/nuovo",
            $data,
            $additional_data,
            'nuovo',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/modifica",
            $data,
            $additional_data,
            'modifica',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/elimina",
            $data,
            $additional_data,
            'elimina',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/info",
            $data,
            $additional_data,
            'info',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/infomail",
            $data,
            $additional_data,
            'infoMail',
            $this->docType
        );
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

        return $this->auth->post(
            "{$this->docType}/inviamail",
            $data,
            $additional_data,
            'inviaMail',
            $this->docType
        );
    }
}
