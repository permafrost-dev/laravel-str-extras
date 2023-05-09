<?php

namespace PermafrostDev\LaravelStrExtras;

use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelStrExtrasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-str-extras');
    }

    public function boot()
    {
        Str::macro('insert', fn (...$args) => (new LaravelStrExtras())->insert(...$args));
        Str::macro('insertAfter', fn (...$args) => (new LaravelStrExtras())->insertAfter(...$args));
        Str::macro('insertAfterMatch', fn (...$args) => (new LaravelStrExtras())->insertAfterMatch(...$args));
    }
}
