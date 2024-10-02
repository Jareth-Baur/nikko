<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class OfficeController extends Controller
{
    public function list()
    {
        $office = DB::table('offices')
                            //primary key               
        ->join('employees', 'employees.officeCode', '=', 'offices.officeCode')      
        ->get();
        if (request()->ajax()) {
            return DataTables::of($office)

            ->make(true);
        } 
        return view('offices.officesList');

        
}
}
