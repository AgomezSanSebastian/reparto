<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;

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
    return view('auth.login');})->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

Route::get('/user/configuracion', [UserController::class,'config'])->middleware(['auth'])->name('user.config');
Route::post('/user/update', [UserController::class,'update'])->middleware(['auth'])->name('user.update');

Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');

Route::get('/food', [FoodController::class, 'index'])->name('food.index');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');