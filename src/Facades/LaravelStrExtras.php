<?php

namespace PermafrostDev\LaravelStrExtras\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PermafrostDev\LaravelStrExtras\LaravelStrExtras
 */
class LaravelStrExtras extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PermafrostDev\LaravelStrExtras\LaravelStrExtras::class;
    }
}
