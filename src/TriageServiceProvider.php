<?php

namespace Phikhi\Triage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Phikhi\Triage\Commands\TriageCommand;

class TriageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('triage')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_triage_table')
            // ->hasCommand(TriageCommand::class)
            ;
    }
}
