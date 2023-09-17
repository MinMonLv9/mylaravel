<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\role\rolecontroller;
use App\Http\Controllers\staff\staffcontroller;
use App\Http\Controllers\shop\shopcontroller;
use App\Http\Controllers\category\categorycontroller;

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


Route::get('roleprocess/search', [rolecontroller::class, 'searchProcess']);
Route::resource('roleprocess', rolecontroller::class);
Route::get('roleprocess/testing1', rolecontroller::class, 'searchProcess');
Route::get('roleprocess/testing2', rolecontroller::class, 'searchProcess');


Route::get('shopprocess/search', [shopcontroller::class, 'searchProcess']);
Route::get('shopdashboard/',[shopcontroller::class, 'showDashboard']);
Route::get('shopdashboard/foodregister/',[shopcontroller::class, 'foodRegister']);
Route::get('shopregister', [shopcontroller::class, 'register']);
Route::get('shoplogin', [shopcontroller::class, 'login']);
Route::post('shopValidate', [shopcontroller::class, 'shopValidate']);
Route::get('shopprocess/{id}/approve', [shopcontroller::class, 'shopApprove']);
Route::get('shopprocess/{id}/decline', [shopcontroller::class, 'shopDecline']);
Route::get('shopprocess/show', [shopcontroller::class, 'show'])->name("showrequest");
Route::resource('shopprocess', shopcontroller::class);

Route::get('staffprocess/search', [staffcontroller::class, 'searchProcess']);
Route::get('stafflogin', [staffcontroller::class, 'login']);
Route::get('staffprocess/stafflist', [staffcontroller::class, 'staffList']);
Route::get('staffprocess/logout', [staffcontroller::class, 'Logout']);
Route::post('staffvalidate', [staffcontroller::class, 'validateuser']);
Route::post('staffprocess/show', [staffcontroller::class, 'show']);
Route::resource('staffprocess', staffcontroller::class);


Route::resource('categoryprocess', categorycontroller::class);
