<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Category;
use App\Product;
use App\Sale;

class CartController extends Controller
{

    public function index()
    {

       $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('Admin.cart.index')->with('cart_data',$cart_data);
    }

    public function indexcart()
    {

         $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('Admin.cart.index')->with('cart_data',$cart_data);
        // return  $cart_data;

    }
    public function getsales()
    {

        return view('Admin.sales.index');
    }

     public function cart()
    {
        return view('Admin.pos_invoice.purchase');
    }

    public function addToCart(Request $request,$id)
    {
        
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

       if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart']);
                }
            }
        }
        else
        {
      
            $products = Product::find($prod_id);
            $prod_name = $products->name;
            $image = $products->image;
            $sprice = $products->sprice;


            if($products)
            {
                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $sprice,
                    'item_image' => $image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
            }

        }
    }

     public function cartloadbyajax()
    {
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
    }
    
    public function updatetocart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $prod_id;

            if(in_array($prod_id_is_there, $item_id_list))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $prod_id)
                    {
                        $cart_data[$keys]["item_quantity"] =  $quantity;
                        $ttprice = ($cart_data[$key]["item_price"] * $quantity);
                        $grandtotalprice = number_format($ttprice);
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated',
                     'gtprice' =>''.$grandtotalprice.''
                    ]);
                    }
                }
            }
        }
    }


 public function edit(Sales $sales)
    {

        $products = Product::all();

        $sales->load('products');

        return view('admin.sales.edit', compact('products', 'sales'));
    }

    public function update(Request $request, Sales $sales)
    {
       
    }

    public function show(Sales $sales)
    {
        $products = Product::all();

        $sales->load('products');

        return view('admin.sales.show', compact('products', 'sales'));
    }

    public function destroy(Sales $sales)
    {

        $sales->delete();

        return back();
    }



    // public function update(Request $request)
    // {
        // if($request->id and $request->quantity)
        // {
        //     $cart = session()->get('cart');

        //     $cart[$request->id]["quantity"] = $request->quantity;

        //     session()->put('cart', $cart);

        //     session()->flash('success', 'Cart updated successfully');
        // }
    // }

    // public function remove(Request $request)
    // {
    //     if($request->id) {

    //         $cart = session()->get('cart');

    //         if(isset($cart[$request->id])) {

    //             unset($cart[$request->id]);

    //             session()->put('cart', $cart);
    //         }

    //         session()->flash('success', 'Product removed successfully');
    //     }
    // }

    public function store(Request $request)
    {
        $sales = new Sales();
        $sales->quantity = $this->generate();
        $sales->grandtotal = $request->get('grandtotal');
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);

        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
            }
        }

        return redirect()->route('sales.index');
    }

     public function deletefromcart(Request $request)
    {
        $prod_id = $request->input('product_id');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }
    

         public function generate()
    {
        $random = substr(str_shuffle(str_repeat($x='00123456789', ceil(6/strlen($x)))),1,6);
        return $random;
    }
}
