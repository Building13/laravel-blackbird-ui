<?php

namespace Building13\Blackbird;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use App\View\Components\Alpinejs\Carousel;
use Illuminate\View\Compilers\BladeCompiler;
use App\View\Components\Alpinejs\CarouselItem;
use Building13\Blackbird\Components\Blocks\Block;
use Building13\Blackbird\Commands\BlackbirdCommand;
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
            Blade::component($viewPath,  $alias);
        }
    }
}
