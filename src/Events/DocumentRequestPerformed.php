<?php

namespace OfflineAgency\FattureInCloud\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
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
    public $response;

    public function __construct(
        string $docType,
        string $method,
        array  $request,
        object $response
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

        $this->setResponse(
            $response
        );
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
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
}
