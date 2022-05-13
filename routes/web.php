<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
    return view('index');
});

Route::get('/',[CrudController::class,'index']);
Route::post('/store',[CrudController::class,'store'])->name('store');
Route::get('/get',[CrudController::class,'get'])->name('get');
Route::get('/edit/{id}',[CrudController::class,'edit'])->name('edit');
Route::post('/update',[CrudController::class,'update'])->name('update');
Route::get('/delete/{id}',[CrudController::class,'delete'])->name('delete');