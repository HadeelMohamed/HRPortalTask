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


public function EmployeeOfTheMonth()
{
// 	$total_time = TimeTrack::where('user_id', '3')->where('track_date', $last_date->track_date)->sum(DB::raw("TIME_TO_SEC(total_time)"));
// dd($total_time);

  $currentMonth = date('m');
$data = Attendance::whereRaw('MONTH(date) = ?',[$currentMonth])->select(DB::raw('SUM(attendance.total_time) as count'))
->groupby('user_id')
            ->get();

            dd($data);

}

}