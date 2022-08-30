<?php

namespace GetCandy\ScoutDatabaseEngine\Tests;

use GetCandy\ScoutDatabaseEngine\ScoutDatabaseServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ScoutDatabaseServiceProvider::class,
        ];
    }

    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
    }
}
