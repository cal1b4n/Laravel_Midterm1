<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', 'App\Http\Controllers\CompanyController@index');
Route::post('/companies/create', 'App\Http\Controllers\ComapnyController@create');

Route::get('/employees', 'App\Http\Controllers\EmployeesController@index');
Route::post('/employees/create', 'App\Http\Controllers\EmployeesController@create');