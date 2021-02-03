<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Supply;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $products = \DB::table('products')->count();
        $sales = \DB::table('sales')->count();
        $suppliers = \DB::table('supplies')->count();

        $todaysales = \DB::table('sales')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->count();
        $todaysalesvalue = \DB::table('sale_items')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->sum('price');

         $quantity = \DB::table('products')->sum('qty');

        $shortageNumber = 50;
        $lowstock = Product::where('qty', '<=', $shortageNumber)->count();
        return view('home',compact('products','quantity','lowstock','sales','todaysales','suppliers','todaysalesvalue'));
    }
}
