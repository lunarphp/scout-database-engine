<?php

namespace GetCandy\ScoutDatabaseEngine;

use Illuminate\Support\ServiceProvider;

class ScoutDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
