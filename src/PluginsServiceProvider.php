<?php

namespace Kouloughli\Plugins;

use Illuminate\Support\ServiceProvider;
use Kouloughli\Plugins\Console\Commands\GeneratePluginCommand;
use Kouloughli\Plugins\Console\Commands\RemovePluginCommand;

class PluginsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GeneratePluginCommand::class,
                RemovePluginCommand::class,
            ]);
        }
    }
}
