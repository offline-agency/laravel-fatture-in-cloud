<?php

namespace OfflineAgency\FattureInCloud\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DocumentRequestPerformed
{
    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    public $docType;
    public $method;
    public $request;
    public $additional_info;
    public $response;
    public $response_header;

    public function __construct(
        string $docType,
        string $method,
        array  $request,
        array  $additional_info,
        object $response,
        array $response_header
    )
    {
        $this->setDocType(
            $docType
        );

        $this->setMethod(
            $method
        );

        $this->setRequest(
            $request
        );

        $this->setAdditionalInfo(
            $additional_info
        );

        $this->setResponse(
            $response
        );

        $this->setResponseHeader(
            $response_header
        );
    }

    /* GETTERs AND SETTERs */

    public function getDocType()
    {
        return $this->docType;
    }

    public function setDocType(
        $docType
    ): void
    {
        $this->docType = $docType;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod(
        $method
    ): void
    {
        $this->method = $method;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest(
        $request
    ): void
    {
        $this->request = $request;
    }

    public function getAdditionalInfo()
    {
        return $this->additional_info;
    }

    public function setAdditionalInfo(
        $additional_info
    ): void
    {
        $this->additional_info = $additional_info;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(
        $response
    ): void
    {
        $this->response = $response;
    }

    public function getResponseHeader()
    {
        return $this->response_header;
    }

    public function setResponseHeader(
        $response_header
    ): void
    {
        $this->response_header = $response_header;
    }
}
