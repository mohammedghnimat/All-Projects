<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatisticsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('signin',SignupController::class);
Route::post('login',[LoginController::class,'login'])->name('Login');
Route::get('/login',function(){
    return view('Auth.login');
});

Route::resource('department',DepartmentController::class);
Route::resource('employee',EmployeeController::class);
// Route::resource('statistics',StatisticsController::class);
Route::get('/employee/search',[EmployeeController::class,'show'])->name('employee.search');

