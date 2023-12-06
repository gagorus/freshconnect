<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
})->name('view_cart');

Route::get('/cart/{id}', [CartController::class, 'checkCart'])->name('check_cart');
Route::get('/home', [ItemController::class, 'viewItems'])->name('homeview');

Route::get('/home/{id}/{category}/{userid}', [CartController::class, 'addCart'])->name('add_cart');

Route::get('/detail/{id}/{category}', [ItemController::class, 'viewDetail'])->name('detail_check');

Route::get('/detail', function () {
    return view('detail');
})->name('detail_view');


Route::delete('/cart/{d_id}/{userid}', [CartController::class, 'destroy'])->name('destroy_cart');
// Route::get('/fruits', [FruitController::class, 'index'])->name('fruits.index');
// Route::get('/vegetables', [VegetableController::class, 'index'])->name('vegetables.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


