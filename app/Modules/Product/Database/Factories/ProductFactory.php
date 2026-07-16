<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'category_id' => $this->faker->randomDigit(),
            'base_uom_id' => $this->faker->randomDigit(),
            'created_by' => $this->faker->randomDigit(),
            'updated_by' => $this->faker->randomDigit(),
        ];
    }

}
