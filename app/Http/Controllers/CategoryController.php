<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategories()
    {
        $data['title'] = 'All Categories';
        $data['categories'] = Category::all();

        return view('categories', $data);
    }

    public function showProductsCategory($id)
    {
        $data['category'] = Category::where('id', $id)
            ->first();

        return view('category', $data);
    }
}
