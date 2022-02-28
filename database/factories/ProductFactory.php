<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'stock' => $this->faker->randomDigit(),
            'price' => $this->faker->randomFloat(2, 1000, 50000),
            'images' => $this->getImagesArray(),
        ];
    }

    private function getImagesArray(): array
    {
        $res_array = [];
        $i = 0;
        for (; $i < rand(1, 5); $i++) {
            $res_array[] = $this->faker->image('public/upload/images', 360, 360, 'animals', false);
        }
        return $res_array;
    }
}
