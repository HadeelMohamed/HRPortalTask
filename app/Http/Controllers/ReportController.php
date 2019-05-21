<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Attendance;

class ReportController  extends Controller
{
 
    public function showdatereport()
    {      
     
  
  $employees = User::where('role','employee')->get(); 


    return view('Report.datereport',compact('employees'));
}

public function datareportform(Request $request)

{
	//dd($request->all());


      $alldata=Attendance::whereBetween('date',array($request->date_from,$request->date_to))
		      	->where('user_id',$request->employee_id)
		      	->get();
     return view('Report.dataofdatereport',compact('alldata'));






}
}