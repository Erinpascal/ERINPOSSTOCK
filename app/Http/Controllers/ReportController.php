<?php

namespace App\Http\Controllers;

use App\Sale;
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

    public function index()
    {
        $sales = Sale::whereBetween('created_at', [request()->from, request()->to])
            ->with('products')->get();
        return view('admin.report.index', compact('sales'));
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
