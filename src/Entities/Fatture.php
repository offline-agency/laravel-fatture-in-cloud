<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\Requests\Documenti as Request;

class Fatture extends Documenti
{
    protected $docType = 'fatture';

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function pdf($data = [ ])
    {
        Request::dettagli($data);
        $response = $this->auth->post("{$this->docType}/dettagli", $data);

        return $response->dettagli_documento->link_doc;
    }
}
