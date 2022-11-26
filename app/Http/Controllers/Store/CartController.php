<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    function cart()
    {
        return view("store.cart.cart");
    }
    function checkout()
    {
        return view("store.cart.checkout");
    }
}
