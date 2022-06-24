<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

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

Route::get('/', function(){
    return view('front_page');
})->name('welcome');

Route::prefix('/seller')->group( function () {
    Route::get('/', [SellerController::class, 'index'])->name('seller.index');
    Route::get('/create', [SellerController::class, 'create'])->name('seller.create');
    Route::post('/', [SellerController::class, 'store'])->name('seller.store');
    Route::get('/{id}', [SellerController::class, 'show'])->name('seller.show');
    Route::get('/edit/{id}', [SellerController::class, 'edit'])->name('seller.edit');
    Route::put('/{id}', [SellerController::class, 'update'])->name('seller.update');
    Route::delete('/{id}', [SellerController::class, 'destroy'])->name('seller.delete');
});

Route::prefix('/customer')->group( function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
});
