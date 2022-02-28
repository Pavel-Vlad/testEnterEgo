<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $count_products = 30;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(5)
            ->create();

        Product::factory()
            ->count(30)
            ->create();

        CategoryProduct::factory()
            ->count(90)
            ->create();
    }
}
