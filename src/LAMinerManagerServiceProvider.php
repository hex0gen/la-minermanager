<?php

namespace Hex0gen\LAMinerManager;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Admin;

class LAMinerManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(LAMinerManager $extension)
    {
        if (! LAMinerManager::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'la-minermanager');
        }

        if ($this->app->runningInConsole()) {
          $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang')], 'la-minermanager-lang');
          $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')], 'la-minermanager-migrations');
        }

        if ($this->app->runningInConsole() && $views = $extension->views()) {
            $this->publishes(
                [$views => resource_path('views/admin/la-minermanager')],
                'la-minermanager-views'
            );
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/hex0gen/la-minermanager')],
                'la-minermanager-assets'
            );
        }

        $this->app->booted(function () {
            LAMinerManager::routes(__DIR__.'/../routes/web.php');
        });
    }
}
