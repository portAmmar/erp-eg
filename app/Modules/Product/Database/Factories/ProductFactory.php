<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Models\Category;
use Modules\Product\Models\Uom;
use App\Models\User;
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'sku' => $this->faker->unique()->bothify('???-#####'),
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'product_type' => $this->faker->randomElement(ProductType::cases())->value,
            'status' => $this->faker->randomElement(ProductStatus::cases())->value,

            'category_id' => Category::factory(),
            'base_uom_id' => Uom::factory(),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
        ];
    }

}
