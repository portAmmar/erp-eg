<?php

use App\Providers\AppServiceProvider;
use Modules\Sales\Providers\SalesServiceProvider;
use Modules\Inventory\Providers\InventoryServiceProvider;

return [
    AppServiceProvider::class,
    SalesServiceProvider::class,
    InventoryServiceProvider::class,
];
