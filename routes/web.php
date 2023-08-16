<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::resource('/tasks',TaskController::class);
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/create', [TaskController::class, 'store'])->name('store');
Route::get('/ajexfletch',[TaskController::class, 'ajexFletch'])->name('ajexFletch'); 
Route::get('/ajexfletchdata',[TaskController::class, 'ajexFletchdata'])->name('ajexFletchdata'); 

Route::get('/test',function(){
    return view ('test');
});
