<?php

namespace WANAA\:uc:package;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class :uc:packageServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name(':lc:package');
            // ->hasConfigFile();
            // ->hasTranslations();
            // ->hasCommands();
            // ->hasAssets();
            // ->hasViews();
    }
}