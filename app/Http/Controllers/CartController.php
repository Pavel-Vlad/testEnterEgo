<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function showCart()
    {
        $data['title'] = 'Корзина';

        $data['data_cart'] = Session::get('cart');
        if ($data['data_cart']) {
            $data['products'] = Product::whereIn('id', array_keys($data['data_cart']))
                ->get();
        }


        return view('cart', $data);
    }

    public function addToCart($id)
    {
        $this->subtractStockProduct($id);

        if (Session::has('cart.' . $id)) {
            Session::increment('cart.' . $id);
        } else {
            Session::put('cart.' . $id, 1);
        }

        return redirect()->back();
    }

    private function subtractStockProduct($id)
    {
        $product = Product::find($id);
        $product->stock -= 1;
        $product->save();
    }
}
