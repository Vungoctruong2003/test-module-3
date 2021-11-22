<?php

use App\Http\Controllers\AgentController;
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

Route::get('/create',[AgentController::class,'create'])->name('create');
Route::get('/destroy/{id}',[AgentController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[AgentController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[AgentController::class,'update'])->name('update');
Route::get('/',[AgentController::class,'index'])->name('index');
Route::post('/create',[AgentController::class,'store'])->name('store');
Route::post('/search',[AgentController::class,'search'])->name('search');

