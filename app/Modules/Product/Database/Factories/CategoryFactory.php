<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'parent_category_id' => $this->faker->unique()->bothify('???-#####'),
            'name' => $this->faker->word(),
        ];
    }

}
