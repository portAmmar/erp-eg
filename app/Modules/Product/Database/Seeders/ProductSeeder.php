<?php

namespace Modules\Product\Database\Seeders;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Generates 50 fake products using the ProductFactory
        Product::factory()->count(50)->create();
    }
}
