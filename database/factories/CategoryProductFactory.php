<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::select('id')->orderByRaw("RAND()")->first()->id,
            'product_id' => Product::select('id')->orderByRaw("RAND()")->first()->id
        ];
    }
}
