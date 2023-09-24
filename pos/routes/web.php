<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SubcontrollerController;
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

Route::resource('category', CategoryController::class);

Route::resource('subcategory', SubcontrollerController::class);

Route::resource('customer', CustomerController::class);

Route::resource('purchase', PurchaseController::class);

Route::resource('product', ProductController::class);


Route::get('/category//edit', function () {
    return view('Pos.editCategory');
});

Route::get('/subcategory//edit', function () {
    return view('Pos.editSubcategory');
});

Route::get('/customer//edit', function () {
    return view('Pos.editCustomer');
});

Route::get('/purchase//edit', function () {
    return view('Pos.editPurchase');
});


