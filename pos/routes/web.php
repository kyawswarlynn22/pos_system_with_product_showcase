<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/addCategory', function () {
    return view('Pos.addCategory');
});

Route::get('/categorylist', function () {
    return view('Pos.categoryList');
});

Route::get('/createcustomer', function () {
    return view('Pos.createcustomer');
});

Route::get('/customerlist', function () {
    return view('Pos.customerlist');
});
