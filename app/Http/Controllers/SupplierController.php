<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;
use App\Brand;
use App\Product;
use App\Supplyer;
use DB;



class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supply=Supply::get();
        return view('Admin.suppliers.index',compact('supply'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.suppliers.create');
    }

     public function supplyget()
    {
        
        $brand = Brand::all();
        $supply=Supply::all();
        $products = Product::all();
        return view('Admin.supply.create',compact('supply','brand','products'));
    }

    public function supplycreate(Request $request)
    {
       $this->validate($request, [
            'name' =>  ['required'],
            'quantity' =>  ['required'],
            'price' =>  ['required'],
            'brand_id' =>  ['required'],
            'supply_id' =>  ['required'],
            'expire' =>  ['required'],

        ]);

         $supplyer = new Supplyer();
        $supplyer->name = $request->get('name');
        $supplyer->supply_id    = $request->supply_id;
        $supplyer->brand_id    = $request->brand_id;
        $supplyer->quantity = $request->get('quantity');
        $supplyer->price = $request->get('price');
        $supplyer->type = $request->get('type');
        $supplyer->expire = $request->get('expire');
        $supplyer->save();

        return back()->with('success','Product created successfully.');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>  ['required'],
            'contact' =>  ['required'],
             'email' =>  ['required'],
             'location' =>  ['required'],
        ]);

        $supply = Supply::create($request->all());
        return redirect()->route('suppliers.index')
        ->with('success','Supplier deleted successfully');
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
              $supply = Supply::find($id);
        return view('Admin.suppliers.edit')->with([
            'supply'=> $supply,
]);
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
       
         $supply = Supply::find($id);
         $supply->name =  $request->get('name');
         $supply->email = $request->get('email');
         $supply->contact = $request->get('contact');
         $supply->location = $request->get('location');
         $supply->save();       
         return redirect()->route('suppliers.index')
         ->with('success','Supplier deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        $supply->delete();

return redirect()->route('suppliers.index')->with('success','supplier successfully deleted');
    }
}
