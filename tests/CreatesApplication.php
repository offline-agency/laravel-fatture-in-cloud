<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
  /**
   * Creates the application.
   *
   */
  public function createApplication()
  {
    return parent::createApplication();
  }
}
