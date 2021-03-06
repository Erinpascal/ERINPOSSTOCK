<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Category;
use App\Product;
use App\Sale;
use App\Saleitem;
use App\ProductSale;
use App\User;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;




class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $category = Category::get();

        return view('Admin.checkout.index')->with('cart_data',$cart_data);
    }
    public function storeorder(Request $request)
    {

        if(isset($_POST['place_order_btn']))
        {

            // placing sales 
            $trackno= rand(1111,9999);
            $sales = new Sale;
            $user = new User;
            $sales ->user_id = Auth::user()->id;;
            $sales->tracking_no = 'medi'.$trackno;
            // $sales->name = $request->name;
             $sales->name = $request->get('name');

            $sales->save();

            
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart= $cart_data;
            foreach ($items_in_cart as $itemdata) {
                 $sales =ProductSale::create([
                $products = Product::find($itemdata['item_id']),
                   'sale_id' => $sales->id,
                   'product_id'=> $itemdata['item_id'],
                    'name'=> $itemdata['item_name'],
                    'price'=> $itemdata['item_price'],
                    'unit_profit'=> $itemdata['item_unit_profit'],
                    'quantity'=> $itemdata['item_quantity'],

                 ]);
       
            \DB::table('products')->where('id', $products->id)->decrement('qty',(int)$itemdata['item_quantity']);

            }
            Cookie::queue(Cookie::forget('shopping_cart'));
            return back()->with('success','Sales successfully made');
        }
    }

    public function stripeorder(Request $request)
{    
    if(isset($_POST['stipe_payment_btn']))
    {
        $stripetoken = $request->input('stripeToken');
        $STRIPE_SECRET = "YOUR_STRIPE_SECRET";
        Stripe::setApiKey($STRIPE_SECRET);
        \Stripe\Charge::create([
            'amount' => 100 * 100,
            'currency' => 'usd',
            'description' => "Thank you for purchasing with Fabcart",
            'source' => $stripetoken,
            'shipping' => [
                'name' => "User Name",
                'phone' => "+1XXXXXXX",
                'address' => [
                    'line1' => "Address 1",
                    'line2' => "Address 2",
                    'postal_code' => "Zipcode",
                    'city' => "City",
                    'state' => "State",
                    'country' => 'US',
                ],
            ],
        ]);
        return redirect('/thank-you')->with('status','Order has been placed Successfully');
    }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
