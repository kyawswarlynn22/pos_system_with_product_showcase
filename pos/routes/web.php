<?php

use App\Http\Controllers\CashsaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\depositsaleController;
use App\Http\Controllers\expense;
use App\Http\Controllers\expenseCagetoryController;
use App\Http\Controllers\preordersaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\salereturnController;
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

Route::resource('cashsale',CashsaleController::class);

Route::resource('depositsale', depositsaleController::class);

Route::resource('preordersale', preordersaleController::class);

Route::resource('salereturn',salereturnController::class);

Route::resource('expenseCategory', expenseCagetoryController::class);

Route::resource('expense', expense::class);


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

Route::get('/product//edit', function () {
    return view('Pos.editProduct');
});

Route::get('/cashsale//edit', function () {
    return view('Pos.editCashsale');
});

Route::get('/depositsale//edit', function () {
    return view('Pos.editDepositsale');
});

Route::get('/preorder//edit', function () {
    return view('Pos.editPreordersale');
});

Route::get('/salereturn//edit', function () {
    return view('Pos.editSalereturn');
});


/* Details */
Route::get('/product//detail', function () {
    return view('Pos.productDetail');
});

Route::get('/cashsale//detail', function () {
    return view('Pos.cashsaleDetails');
});

Route::get('/depositsale//detail', function () {
    return view('Pos.depositsaleDetail');
});

Route::get('/preorder//detail', function () {
    return view('Pos.preordersaleDetail');
});

Route::get('/salereturn//detail', function () {
    return view('Pos.salereturnDetail');
});