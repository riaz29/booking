<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AgentbookController;
use App\Http\Controllers\AgentcustomerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AmountreceiveController;
use App\Http\Controllers\AmountspendController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SpendlineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderfileController;
use App\Http\Controllers\OrderimageController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('is_manager');
Route::resource('/account',AccountController::class);
Route::resource('/customer',CustomerController::class)->middleware('is_manager');
Route::resource('/agent_customer',AgentcustomerController::class);
Route::resource('/amount_received',AmountreceiveController::class);
Route::resource('/amount_spend',AmountspendController::class);
Route::resource('/spendline',SpendlineController::class);
Route::resource('/agent_book',AgentbookController::class);
Route::resource('/book',BookController::class);
Route::resource('/order',OrderController::class);
Route::resource('/vehicle_image',ImageController::class);
Route::resource('/file',FileController::class);
Route::resource('/orderfile',OrderfileController::class);
Route::resource('/orderimage',OrderimageController::class);



