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

Route::get('/', function () {
	$pageleftsidebar=view('backendcode.leftsidebar'); 
    return view('master')->with('pageleftsidebar',$pageleftsidebar);
});
