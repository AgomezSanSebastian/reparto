<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Models\Weather;
use Illuminate\Support\Facades\Http;

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
Route::get('/restaurant/file/{filename}', [RestaurantController::class,'getImage'])->name('restaurant.file');

Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::get('food/{food}' ,[FoodController::class, 'show'])
    ->where('food', '[0-9]+')
    ->name('food.show');
Route::get('food/new', [FoodController::class, 'new'])->name('food.new');
Route::post('food', [FoodController::class, 'store'])->name('food.store');
Route::get('food/{food}/edit', [FoodController::class,'edit'])
    ->where('food', '[0-9]+')
    ->name('food.edit');
Route::put('food/{food}', [FoodController::class, 'update'])->name('food.update');
Route::delete('food/{food}', [FoodController::class, 'destroy'])->name('food.destroy');
Route::get('food/customindex', [FoodController::class, 'customindex'])->name('food.customindex');


Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('order/{order}',[OrderController::class, 'show'])
    ->where('order', '[0-9]+')
    ->name('order.show');
Route::get('order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('order', [OrderController::class, 'store'])->name('order.store');
Route::get('order/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::put('order/{order}', [OrderController::class, 'update'])->name('order.update');



Route::get('tiempo', function () {
    $url = 'https://www.el-tiempo.net/api/json/v2/provincias/21/municipios';
    $tiempos = Weather::get();
     Http::get($url)->json();

    return view('tiempo',$tiempos);
})->name('tiempo.index');
