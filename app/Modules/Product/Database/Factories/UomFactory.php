<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UomFactory extends Factory
{

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('???-#####'),
            'name' => $this->faker->word(),
            'uom_category_id' => $this->faker->text(),
        ];
    }

}
