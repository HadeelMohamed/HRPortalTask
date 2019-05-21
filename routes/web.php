<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/login');
});

///loginroutes
Route::any('/authenticate', 'LoginController@authenticate')->name('authenticate');


//employees view
Route::resource('/Employees', 'EmployeesController');
//deleteemployee
Route::get('/employees/{id}/delete', 'EmployeesController@deleteemployees');
//edit employee
Route::get('/employees/{id}/edit', 'EmployeesController@editemployees');
Route::any('/editemp', 'EmployeesController@editemp')->name('editemp');
//addemployee
Route::any('/employeesstore', 'EmployeesController@employeesstore')->name('employeesstore');
//attendance
Route::get('/Attendance', 'EmployeesController@showattendance');
Route::any('/attendedform', 'EmployeesController@attendedform')->name('attendedform');


///Date Report

Route::get('/DateReport', 'ReportController@showdatereport');
Route::any('/datareportform', 'ReportController@datareportform')->name('datareportform');

