<?php

namespace Modules\Inventory\Providers;

use App\Modules\Inventory\Contracts\InventoryInterface;
use App\Modules\Inventory\Services\InventoryService;
use Illuminate\Support\ServiceProvider;

class  InventoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
        InventoryInterface::class,
        InventoryService::class

        );
    }
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
//        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
