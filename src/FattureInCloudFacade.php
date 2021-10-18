<?php

namespace OfflineAgency\FattureInCloud;

class FattureInCloudFacade extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'fatture-in-cloud';
    }
}