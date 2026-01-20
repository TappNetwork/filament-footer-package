<?php

declare(strict_types=1);

namespace Tapp\FilamentFooter;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/filament-footer.php',
            'filament-footer'
        );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-footer');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-footer');

        $this->publishes([
            __DIR__.'/../config/filament-footer.php' => config_path('filament-footer.php'),
        ], 'filament-footer-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/filament-footer'),
        ], 'filament-footer-views');

        $this->publishes([
            __DIR__.'/../resources/lang' => lang_path('vendor/filament-footer'),
        ], 'filament-footer-translations');

        $this->app->booted(function () {
            foreach (Filament::getPanels() as $panel) {
                $panel->renderHook(
                    'panels::footer',
                    fn (): string => View::make('filament-footer::footer')->render()
                );
            }
        });
    }
}
