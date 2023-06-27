<?php

namespace AdminKit\Polls;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AdminKit\Polls\Commands\PollsCommand;
use AdminKit\Polls\Providers\FilamentServiceProvider;
use AdminKit\Polls\Providers\RouteServiceProvider;

class PollsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-polls')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin_kit_polls_table')
            ->hasCommand(PollsCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
