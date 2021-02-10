<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\WarehouseController;

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

Route::get('/', [HomeController::class,'index']);
Route::view('/article','main.v_article');
Route::view('/about','main.v_about');


//Route Admin
Route::get('/admin_about',[AdminController::class,'about']);
Route::get('/admin_about/{id}',[AdminController::class,'parsing']);
Route::view('/admin','admin.v_index');

Route::resource('storage',StorageController::class);
Route::resource('warehouse',WarehouseController::class);
//Route::view('/admin_about','admin.v_about');
Route::view('/tempadmin','layout.v_template_admin');
