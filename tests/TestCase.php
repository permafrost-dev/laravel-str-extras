<?php

namespace PermafrostDev\LaravelStrExtras\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use PermafrostDev\LaravelStrExtras\LaravelStrExtrasServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelStrExtrasServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
