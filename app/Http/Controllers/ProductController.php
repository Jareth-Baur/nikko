<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function list(){
        $product = DB::table('products')
        ->join('productlines', 'productlines.productLine', '=', 'products.productLine')  
        ->get();
        if (request()->ajax()) {
            return DataTables::of($product)

            ->make(true);
        } 
        return view('prod.productList');

        
}
}
