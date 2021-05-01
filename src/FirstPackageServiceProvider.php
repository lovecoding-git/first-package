<?php

namespace LovecodingGit\FirstPackage;

use LovecodingGit\FirstPackage\Commands\FirstPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FirstPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('first-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_first-package_table')
            ->hasCommand(FirstPackageCommand::class);
    }
}
