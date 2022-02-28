<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class Header extends Component
{
    public $count_products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $cart = Session::get('cart');
        if ($cart) {
            $this->count_products = array_sum($cart);
        } else {
            $this->count_products = 0;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
