<?php

namespace Phikhi\Triage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TriageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('triage')
            ->hasConfigFile()
            ->hasMigrations([
                'create_data_providers_table',
                'create_data_types_table',
            ]);
    }
}
