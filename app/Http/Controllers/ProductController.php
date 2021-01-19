<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;



class ProductController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    // }
    
      public function index()
    {

        // $products = Product::all();

        // return view('Admin.products.index', compact('products'));

        $products = Product::latest()->paginate(5);
        return view('Admin.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
         $category = Category::get();
                  $brand = Brand::get();

        return view('Admin.products.create',compact('category','brand'));
    }

    public function store(Request $request)
    {
        
         $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['image']);
         $products = new Product();
        $products->name = $request->get('name');
        $products->code =$this->generate();

        $products->category_id    = $request->category_id;
        $products->brand_id    = $request->brand_id;
        $products->quantity = $request->get('quantity');
        $products->bprice = $request->get('bprice');
        $products->sprice = $request->get('sprice');
        $products->image = $input['image'];
         



        $products->save();

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    public function edit(Request $request, $id)
    {

         $category = Category::get();
         $brand = Brand::get();

       $product = Product::find($id);
        return view('Admin.products.edit', compact('product', 'category','brand')); 
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
            'quantity' => 'required',
         'bprice' => 'required',
            'sprice' => 'required',
            'brand' => 'required',

        ]);
        //  $image = $request->file('image');
        // $input['image'] = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['image']);
         $category = new Category();
        $products = Product::find($id);

        // $products->name = $request->get('name');
        // $products->category_id    = $request->category_id;
        // $products->quantity = $request->get('quantity');
        // $products->bprice = $request->get('bprice');
        // $products->sprice = $request->get('sprice');
        // $products->brand = $request->get('brand');
        // $products->image = $input['image'];
         $products->name = $request->get('name');
        $products->category_id    = $request->category_id;
        $products->brand_id    = $request->brand_id;
        $products->quantity = $request->get('quantity');
        $products->bprice = $request->get('bprice');
        $products->sprice = $request->get('sprice');
        $products->brand = $request->get('brand');
        // $products->image = $input['image'];
          if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $products->image = $fileName ;
        }


        $products->save();

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function show(Product $product)
    {

        return view('Admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {

        $product->delete();

return redirect()->route('products.index')->with('flash_message_success','products successfully deleted');
                        

    }

      public function deleteproduct( $id = null)
    {

        Product::where(['id'=> $id])->delete();

return redirect()->back()->with('flash_message_success','products successfully deleted');
                        

    }


    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

        public function generate()
    {
        $random = substr(str_shuffle(str_repeat($x='00123456789', ceil(6/strlen($x)))),1,6);
        return $random;
    }

}
