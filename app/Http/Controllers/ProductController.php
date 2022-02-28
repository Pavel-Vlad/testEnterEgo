<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function showProduct($id)
    {
        $data['product'] = Product::where('id', $id)
            ->first();
        $data['categories']= $data['product']->categories->unique();

        return view('product', $data);
    }
}
