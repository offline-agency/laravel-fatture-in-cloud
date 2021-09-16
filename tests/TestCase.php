<?php

namespace Tests;


use Orchestra\Testbench\TestCase as BaseTestCase;
use OfflineAgency\FattureInCloud\FattureInCloudServiceProvider;

abstract class TestCase extends BaseTestCase
{
  use CreatesApplication;

  protected function getPackageProviders($app)
  {
    return [
      FattureInCloudServiceProvider::class
    ];
  }

  public function setUp(): void
  {
    parent::setUp();
  }

  protected function getEnvironmentSetUp($app)
  {
    $app['config']->set('fatture-in-cloud.api_uid', 'fake_uid');
    $app['config']->set('fatture-in-cloud.api_key', 'fake_api_key');
  }
}
