<?php

namespace Modules\Product\Contracts;
use Modules\Product\Models\Product;
interface ProductInterface
{
    public function create(CreateProdcuctDTO $data): Product;
    public function update(Product $product, UpdateProductDTO $data): Product;
    public function find(int $id): ?Product;
    public function findBySku(string $sku): ?Product;
    public function delete(Product $product): bool;
}
