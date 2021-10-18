<?php

namespace Unit;

use Mockery;
use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\FattureInCloudFacade;
use OfflineAgency\FattureInCloud\FattureInCloudServiceProvider;
use Orchestra\Testbench\TestCase;

class FattureInCloudFacadeTest extends TestCase
{
    /**
     * @test
     */
    public function it_loads_facade_alias()
    {
        $this->app->singleton(
            'fatture-in-cloud',
            function ($app) {
                return Mockery::mock(FattureInCloud::class, function ($mock) {
                    $mock->shouldReceive('test');
                });
            });

        \FattureInCloud::test();
    }

    public function getPackageProviders($app)
    {
        return [
            FattureInCloudServiceProvider::class,
        ];
    }

    public function getPackageAliases($app)
    {
        return [
            'FattureInCloud' => FattureInCloudFacade::class,
        ];
    }
}
