<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/about-us', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact-us', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/show-products/{id}', [FrontController::class, 'show'])->name('front.show');
Route::get('/all-products', [FrontController::class, 'all'])->name('front.all');
Route::get('/category-products/{id}', [FrontController::class, 'categoryProduct'])->name('front.category.product');
Route::post('/customer/form', [CustomerController::class, 'store'])->name('front.customer.store');

Route::resource('cart', CartController::class);
Route::post('cart/store', [CartController::class, 'store'])->name('front.cart.index');
Route::get('cart/checkout/proceed', [CartController::class, 'checkout'])->name('front.cart.checkout');
Route::post('cart/checkout/proceed', [CartController::class, 'store'])->name('front.cart.checkout.post');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::resource('product', ProductsController::class);
    Route::resource('category', CategoryController::class);
});

