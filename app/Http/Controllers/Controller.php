<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showIndex()
    {
        $data['title'] = 'Main Page';
        $data['products'] = Product::where('stock', '>', 0)
            ->orderBy('price')
            ->limit(10)
            ->get();

        return view('index', $data);
    }
}
