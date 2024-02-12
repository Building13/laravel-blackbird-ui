<?php

namespace Building13\Blackbird;

use Building13\Blackbird\Commands\BlackbirdCommand;
use Illuminate\Support\Facades\Blade;
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
            // ->hasMigration('create_laravel-blackbird-ui_table')
            ->hasCommand(BlackbirdCommand::class);
    }

    public function boot()
    {
        // if ($this->app->runningInConsole()) {
        //     $this->publishes([
        //         __DIR__ . '/../resources/tailwind/tailwind.config.js' => base_path('tailwind.config.js'),
        //         __DIR__ . '/../resources/css/app.css' => resource_path('css/app.css'),
        //     ], 'your-package-name-assets');
        // }
    }

    public function packageBooted()
    {
        $this->bootBladeComponents();
    }

    public function bootBladeComponents()
    {
        $prefix = config('blackbird-ui.prefix', '');

        foreach (config('blackbird-ui.components', []) as $alias => $componentClass) {
            if ($prefix) {
                Blade::component($componentClass, $prefix . '-' . $alias);
            }
            Blade::component($componentClass, $alias);
        }

        foreach (config('blackbird-ui.anonymous-components', []) as $alias => $viewPath) {
            if ($prefix) {
                Blade::component($viewPath, $prefix . '-' . $alias);
            }
            Blade::component($viewPath, $alias);
        }
    }
}
