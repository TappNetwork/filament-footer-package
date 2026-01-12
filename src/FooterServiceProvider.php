<?php

namespace Tapp\FilamentFooter;

use Filament\Facades\Filament;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/filament-footer.php',
            'filament-footer'
        );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-footer');
        
        $this->publishes([
            __DIR__ . '/../config/filament-footer.php' => config_path('filament-footer.php'),
        ], 'filament-footer-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-footer'),
        ], 'filament-footer-views');

        FilamentAsset::register([
            Css::make('filament-footer', __DIR__ . '/../resources/dist/filament-footer.css'),
        ], 'yourname/filament-footer');

        $this->app->booted(function () {
            foreach (Filament::getPanels() as $panel) {
                $panel->renderHook(
                    'panels::footer.end',
                    fn (): string => View::make('filament-footer::footer')->render()
                );
            }
        });
    }
}