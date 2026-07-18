<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UomCategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
        ];
    }

}
