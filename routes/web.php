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
Route::get('/companies/create', 'App\Http\Controllers\ComapnyController@create');
Route::post('/companies/store', 'App\Http\Controllers\CompanyController@store');

Route::get('/employees', 'App\Http\Controllers\EmployeesController@index');
Route::get('/employees/create', 'App\Http\Controllers\EmployeesController@create');
Route::get('/employees/store', 'App\Http\Controllers\EmployeesController@store');
