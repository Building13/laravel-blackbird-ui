<?php

namespace Building13\Blackbird;

use Building13\Blackbird\Commands\BlackbirdCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlackbirdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blackbird-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-blackbird-ui_table')
            ->hasCommand(BlackbirdCommand::class);
    }
}
