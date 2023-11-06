<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[NewController::class,'index'])->name('home');
Route::get('/home',[NewController::class,'index'])->name('home');
Route::get('/home/add',[NewController::class,'add'])->name('add');
Route::post('/home/add',[NewController::class,'addemp'])->name('create');
Route::get('/home/view',[NewController::class,'read'])->name('reade');
Route::get('/view/edit/{updateid}',[NewController::class,'getid'])->name('getid');
Route::get('/view/delete/{deleteid}',[NewController::class,'deleteid'])->name('deleteid');
Route::post('/view/{updateid}/update',[NewController::class,'update'])->name('update');