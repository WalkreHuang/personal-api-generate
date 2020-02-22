<?php

namespace Huangwalker\Api;

use Huangwalker\Api\Generator\ApiMakeCommand;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'api-model-generator'
        );

        $this->app->singleton('command.api.make', function ($app) {
            return new ApiMakeCommand($app['files']);
        });

        $this->commands('command.api.make');
    }

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('api-model-generator.php'),
        ]);

        require app_path(config('api-model-generator.routes_file'));
    }
}
