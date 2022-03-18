<?php

use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pedi', function () {
    return view('pedi');
})->middleware(['auth'])->name('pedi');
require __DIR__.'/auth.php';

Route::get('/dogs/index',[DogController::class,'index'])->name('list_dog');
Route::get('/dogs/create',[DogController::class,'create'])->name('create_dog');
Route::get('/dogs/edit/{dog}',[DogController::class, 'edit']);
Route::patch('/dogs/update/{dog}', [DogController::class, 'update'])->name('update_dog');
Route::get('/dogs/show',[DogController::class,'show']);
Route::post('/store',[DogController::class,'store']);
