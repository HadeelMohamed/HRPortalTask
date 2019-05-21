<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Attendance;

class EmployeesController  extends Controller
{
 
    public function index()
    {      
     
  
  $employees = User::where('role','employee')->get(); 

    return view('Employees.employees',compact('employees'));
}
public function deleteemployees($id) 
{

        User::where('id',$id)->delete();

                return redirect('/Employees');

}

///add new employee
public function employeesstore(Request $request) 
{
    
$userdata = [
                    'name' => $request->First_Name,
                    'last_name' => $request->Last_Name,
                    'email' => $request->email,
                    'password' => md5($request->password),
                    'role'=>'employee',
                    'hiringdate'=>$request->hiringdate,
                    'phone_number' => $request->phone];
            
                $employeenew = new User;
                $employeenew=User::create($userdata);

                return redirect('/Employees');

}


public function editemployees($id)
{
  $employee= User::FindOrFail($id);
 
   return view('Employees.edit',compact('employee'));
}


public function editemp( Request $request){


               $employeeupdate = user::find($request->empid);
               
                          $employeeupdate->update([
                    'name' => $request->Name,
                    'last_name' => $request->Last_Name,
                    'email' => $request->email,
                    'password' => md5($request->password),
                    'role'=>'employee',
                    'hiringdate'=>$request->hiringdate,
                    'phone_number' => $request->phone ]);

                          return redirect('/Employees');

}

public function showattendance()
{

      $employees = User::where('role','employee')->get(); 

    return view('Employees.attendance',compact('employees'));

}


public function attendedform(Request $request)

{
   
  $attenddata = [
                    'user_id' => $request->employee_id,
                    'attendance_status' => $request->status,
                    'date' => $request->date,
                    'time_from'=>$request->time_from,
                    'time_to' => $request->time_to];
            
                $attend = new Attendance;
                $attend=Attendance::create($attenddata);
                return redirect('/Attendance');
}
}