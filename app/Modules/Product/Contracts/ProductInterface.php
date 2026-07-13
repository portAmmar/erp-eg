<?php

namespace App\Modules\Inventory\Contracts;

interface ProductInterface
{
    public function deductStock($productId, $quantity);
}
