<?php

namespace App\Modules\Inventory\Contracts;

interface InventoryInterface
{
    public function deductStock($productId, $quantity);
}
