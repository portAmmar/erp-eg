<?php

namespace Modules\Product\Providers;

use App\Modules\Product\Contracts\ProductInterface;
use App\Modules\Product\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class  ProductServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            ProductInterface::class,
            ProductService::class,
        );
    }
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
//        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
