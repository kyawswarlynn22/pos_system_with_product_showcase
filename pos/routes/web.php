<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CashsaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\depositsaleController;
use App\Http\Controllers\expense;
use App\Http\Controllers\expenseCagetoryController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoandNameController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\preordersaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\salereturnController;
use App\Http\Controllers\SubcontrollerController;
use App\Http\Controllers\UpdateprofileController;
use App\Http\Controllers\userController;
use Illuminate\Routing\RouteGroup;
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
    return view('Pos.login');
});

Route::post('/signin', [LoginController::class, 'customLogin']);

Route::post('/registration', [LoginController::class, 'customeRegistration']);

Route::get('/forget_password',[ForgetPasswordController::class,'showForgetPassword']);

Route::post('/forget_password',[ForgetPasswordController::class,'submitForgetPassword']);

Route::post('/new_password',[ForgetPasswordController::class,'newPassword']);

Route::get('/reset_password/{token}',[ForgetPasswordController::class,'showResetPassword'])->name('password.reset');;

//Middlewar Group
Route::middleware('loginCheck')->group(function () {

   

    Route::resource('/dashboard',DashboardController::class);

    Route::get('/signout', [LoginController::class, 'signOut']);

    Route::resource('category', CategoryController::class);

    Route::resource('subcategory', SubcontrollerController::class);

    Route::resource('customer', CustomerController::class);

    Route::resource('purchase', PurchaseController::class);

    Route::resource('product', ProductController::class);

    Route::resource('cashsale', CashsaleController::class);

    Route::resource('depositsale', depositsaleController::class);

    Route::resource('preordersale', preordersaleController::class);

    Route::resource('salereturn', salereturnController::class);

    Route::resource('expenseCategory', expenseCagetoryController::class);

    Route::resource('expense', expense::class);

    Route::resource('account', AccountController::class);

    Route::resource('logoandname', LogoandNameController::class);

    Route::resource('profileandpassword', UpdateprofileController::class);

    Route::resource('user', userController::class);

    Route::resource('password',PasswordController::class);


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

    Route::get('/user//edit', function () {
        return view('Pos.editUser');
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
});
