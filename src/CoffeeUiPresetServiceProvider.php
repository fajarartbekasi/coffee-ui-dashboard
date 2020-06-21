<?php

namespace FajarArtBekasi\CoffeeUiPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class CoffeeUiPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('coffee', function ($command) {
            CoffeeUiPreset::install();

            $command->info('Coffee Ui scaffolding installed successfully.');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
