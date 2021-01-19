<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;


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
        return redirect()->route('suppliers.index');
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
         return redirect()->route('suppliers.index');
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

return redirect()->route('suppliers.index')->with('flash_message_success','supplier successfully deleted');
    }
}
