<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Invoice;
use App\Sale;

use PDF;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        // return view('Admin.cart.index')->with('cart_data',$cart_data);
        
         $products = Product::all();
        return view('Admin.pos_invoice.create', compact('products'))->with('cart_data',$cart_data);
    }

     public function invoice($id)
    {
        
                $sales = Sale::findorFail($id);
            return view('Admin.pos_invoice.invoice',compact('sales'));
        //         $data = [
        //     'sales' => $sales,
        // ];
        // $pdf = PDF::loadView('Admin.pos_invoice.invoice', $data);

        // return $pdf->download('fundaofwebit.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
