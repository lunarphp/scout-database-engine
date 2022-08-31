<?php

namespace GetCandy\ScoutDatabaseEngine\Tests;

use GetCandy\ScoutDatabaseEngine\ScoutDatabaseServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array<int, string>
     */
    protected function getPackageProviders($app)
    {
        return [
            ScoutDatabaseServiceProvider::class,
            TestServiceProvider::class,
        ];
    }

    /**
     * Define database migrations.
     *
     * @return void
     */
    // protected function defineDatabaseMigrations()
    // {
    //     $this->artisan('migrate')->run();
    //     $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    // }
}
