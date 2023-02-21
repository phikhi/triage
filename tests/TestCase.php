<?php

namespace Phikhi\Triage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Phikhi\Triage\TriageServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Phikhi\\Triage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TriageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        foreach ([
            'create_data_providers_table',
            'create_data_types_table',
        ] as $table) {
            $migration = include __DIR__.'/../database/migrations/'.$table.'.php.stub';
            $migration->up();
        }
    }
}
