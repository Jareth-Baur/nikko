<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function list()
    {
        $employee = DB::table('employees')
                            //primary key               
        ->join('offices', 'offices.officeCode', '=', 'employees.officeCode')      
        ->get();
        if (request()->ajax()) {
            return DataTables::of($employee)

            ->make(true);
        } 
        return view('employees.employeesList');

        
}
}
