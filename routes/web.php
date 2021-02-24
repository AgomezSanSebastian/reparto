<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

use App\Models\Restaurant;
use App\Models\Food;
use App\Models\Order;

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


Route::get('restaurant', [RestaurantController::class, 'index']);

require __DIR__.'/auth.php';

Route::get('/user/configuracion', [UserController::class,'config'])->middleware(['auth'])->name('config');
Route::post('/user/update', [UserController::class,'update'])->middleware(['auth'])->name('user.update');
Route::get('/user/profile/{id}', [UserController::class,'profile'])->middleware(['auth'])->name('user.profile');


