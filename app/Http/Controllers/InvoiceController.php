<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;
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

     public function productsCat(Request $request){
       $categort_id = $request->categort_id;

       $priceCount = count($request->price);
       // price are array
       if($categort_id!="" && $priceCount!="0"){
         $price = explode("-",$request->price);

          $start = $price[0];
          $end = $price[1];

          //echo "both are selected";
          $data = DB::table('products')
          ->join('cats','cats.id','products.categort_id')
          ->where('products.categort_id',$categort_id)
          ->where('products.price', ">=", $start)
          ->where('products.price', "<=", $end)
          ->get();

       }
       else if($priceCount!="0"){
         $price = explode("-",$request->price);
         $start = $price[0];
         $end = $price[1];

         //echo "price is selected";
         $data = DB::table('products')
         ->join('cats','cats.id','products.category_id')
         ->where('products.price', ">=", $start)
         ->where('products.price', "<=", $end)
         ->get();

       }
       else if($categort_id!=""){
         //echo "cat is selected";
         $data = DB::table('products')
         ->join('cats','cats.id','products.category_id')
         ->where('products.category_id',$category_id)
         ->get();
       }
       else{
         //echo "nothing is slected";
         return "<h1 align='center'>Please select atleast one filter from dropdown</h1>";

       }

       if(count($data)=="0"){
         echo "<h1 align='center'>no products found under this Category</h1>";
       }else{
       return view('front.produtsPage',[
         'data' => $data, 'catByUser' => $data[0]->name
       ]);
     }

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
         $category = Category::get();
         // $products = Product::all();
         $products = Product::all();
         // $category = Category::with('products')->get();
        return view('Admin.pos_invoice.create', compact('products','category'))->with('cart_data',$cart_data);
    }

     public function showcat($id)
    {
       $products =Product::where('category_id',$id)->get();
       $id =$id;
return view('Admin.pos_invoice.create', compact('products'));      
    }

    // public function viewcat($request Request,$name, $id)
    // {

    //     echo $name;
    //     echo '<br/>';
    //     echo $id;
    // }


    public function getMoreProducts(Request $request) {
        $query = $request->search_query;
        $name = $request->name;
        $sort_by = $request->sort_by;
        $range = $request->range;
        if($request->ajax()) {
            $products = Product::getProducts($query, $name, $sort_by, $range);
                return view('pages.user_data', compact('products'))->render();
        }
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

     public function pdf($ID){
        $Invoice = StockPurchase::with(['products.styles','supplyer'])->where('boxID',$ID)->get();
        $paymenthist= Supplyerpayment::where('boxID',$ID)->sum('amount');
        //return view("PDF.pdfstock",compact(['Invoice','paymenthist']));

        $pdf = PDF::loadView('PDF.pdfstock',compact(['Invoice','paymenthist']));
        return $pdf->stream('Purchase_invoice_'.$ID.'.pdf');
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
         $category = Category::find($id)->products;
        $products = Product::all();


    return view('Admin.pos_invoice.create',compact('category','products'));
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
