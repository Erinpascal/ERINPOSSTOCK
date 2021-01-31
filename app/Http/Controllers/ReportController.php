<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Sale;
use App\Saleitem;

use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class ReportController extends Controller
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

    public function index() {
       
        // $sales = Sale::get();
        $sales = Saleitem::with('products')->get();


        return view('Admin/report/index',compact('sales'));
    }


    public function getRecord(Request $request,$id)
{
            $sales = Sale::find($id);

    $sales = Sale::select("sales.*")
        ->whereBetween('created_at', [$request->from, $request->to])
        ->all($id);
        return view('Admin.report.pdf',compact('sales'));

}
}
