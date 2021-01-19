<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $products = \DB::table('products')->count();
         $quantity = \DB::table('products')->sum('quantity');

        $shortageNumber = 50;
        $lowstock = Product::where('quantity', '<=', $shortageNumber)->count();
        return view('home',compact('products','quantity','lowstock'));
    }
}
