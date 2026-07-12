<?php

namespace Modules\Inventory\Providers;

use Illuminate\Support\ServiceProvider;

class  InventoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        parent::register();
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
