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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){
    Route::get('/', function () {
        return view('AdminPanel.Home')
            ->with([
                'active'=>'Index',
            ]);
    });
    Route::resource('/Companies','CompaniesController');
    Route::resource('/Employees','EmployeesController');
});