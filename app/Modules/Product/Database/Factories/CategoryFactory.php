<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Models\Category;

class CategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'parent_category_id' => Category::factory(),
            'name' => $this->faker->word(),
        ];
    }

}
