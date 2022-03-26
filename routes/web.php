<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcustomerController;
use App\Http\Controllers\EproductController;
use App\Http\Controllers\EvoucherController;

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
    return view('home/eIndex');
});

// customer 
Route::get('/customer/elist',[EcustomerController::class,'list'])->name('customer.elist');
Route::get('/customer/details/{id}',[EcustomerController::class,'details'])->name('customer.details');

//product get
Route::get('/product/elist',[EproductController::class,'list'])->name('product.elist');
Route::get('/product/emedit/{PID}', [EproductController::class,'edit'])->name('product.emedit');

//product post
Route::post('/product/edit', [EproductController::class,'editSubmit'])->name('edit.submit');

//voucher get
Route::get('/voucher/elist',[EvoucherController::class,'list'])->name('voucher.elist');
Route::get('/voucher/ecreate', [EvoucherController::class,'create'])->name('voucher.ecreate');
Route::get('/voucher/emedit/{VOUID}', [EvoucherController::class,'edit'])->name('voucher.emedit');
Route::get('/voucher/edelete/{VOUID}', [EvoucherController::class, 'delete'])->name('voucher.edelete');

//voucher post
Route::post('/voucher/edit', [EvoucherController::class,'editSubmit'])->name('vouedit.submit');
Route::post('/voucher/create', [EvoucherController::class,'addSubmit'])->name('voucreate.submit');