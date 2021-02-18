<?php

namespace App\Http\Controllers;

use App\Sale;
use App\ProductSale;
use Illuminate\Http\Request;

class ReportController extends Controller
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

    // public function index() {

    //     // $sales = Sale::get();
    //     $sales = Saleitem::get();

    //     return view('Admin/report/index',compact('sales'));
    // }

    public function pdf($id){
        $Invoice = ProductSale::with(['products.styles','supplyer'])->where('boxID',$ID)->get();
        $paymenthist= Supplyerpayment::where('boxID',$ID)->sum('amount');

        $pdf = PDF::loadView('Admin.PDF.pdfstock',compact(['Invoice','paymenthist']));
        return $pdf->stream('Purchase_invoice_'.$ID.'.pdf');
    }


    public function index()
    {
                // $quantity = \DB::table('product_sale')->sum('quantity');
        // $quantity = \DB::table('product_sale')::whereBetween('created_at', [request()->from, request()->to])
            // ->with('products')->sum('quantity');

        $sales = Sale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->get();

        $sales1 = Sale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->count();
        $quantity = ProductSale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->sum('quantity');
            $price = ProductSale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->sum('price');
            $profit = ProductSale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->sum('unit_profit');


         // $quantity = \DB::table('products')->sum('qty');

        // $diff_days = $from->sun($to);

        return view('Admin.report.index', compact('sales','sales1','quantity','price','profit'));
    }

    public function getRecord(Request $request, $id)
    {
        $sales = Sale::find($id);

        $sales = Sale::select("sales.*")
            ->whereBetween('created_at', [$request->from, $request->to])
            ->get();
        return view('Admin.report.pdf', compact('sales'));

    }
}
