<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function list()
    {
        $customer = DB::table('customers as c')
        
        ->join('orders as o', 'o.customerNumber', '=', 'c.customerNumber')
        ->join('employees as e', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
        ->select(
            'c.customerNumber',
            'c.customerName',
            'c.contactLastName',
            'c.contactFirstName',
            'c.city',
            'c.country',
            DB::raw("CONCAT(e.firstName, ' ', e.lastName) AS manageby")

        )
        ->get();
        if (request()->ajax()) {
            return DataTables::of($customer)

            ->make(true);
        } 
        return view('customers.customersList');       
    }
}
