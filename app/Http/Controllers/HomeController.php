<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FoodController;
use App\Models\Menu;
use Gloudemans\Shoppingcart\Facades\Cart;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $food = Menu::all();

        return view('home')->with('food', $food);
    }

    public function home()
    {
        // $cart = Cart::content();
        // $carttotal =  Cart::total();
  
         return view('/', compact('cart', 'carttotal'));
    }
}

