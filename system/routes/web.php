<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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
    return view('frontview.index');
});



Route::get('index', [HomeController::class, 'showindex']);
Route::get('myaccount', [HomeController::class, 'showmyaccount']);
Route::get('cart', [HomeController::class, 'showcart']);
Route::get('produkdetail', [HomeController::class, 'showprodukdetail']);
Route::get('produklist', [HomeController::class, 'showproduklist']);
Route::get('whislist', [HomeController::class, 'showWhislist']);
Route::get('checkout', [HomeController::class, 'showcheckout']);
Route::get('contact', [HomeController::class, 'showcontact']);
Route::get('product', [HomeController::class, 'showproduct']);



Route::get('colegan', [HomeController::class, 'showcolegan']);
Route::get('dashboard', [HomeController::class, 'showdashboard']);
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('login', [AuthController::class, 'showlogin']);
Route::get('promo', [HomeController::class, 'showpromo']);
Route::get('register', [AuthController::class, 'showregister']);
Route::get('supplier', [HomeController::class, 'showsupplier']);
Route::get('user', [HomeController::class, 'showuser']);
Route::get('produk2', [HomeController::class, 'showproduk2']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


Route::get('login', [AuthController::class, 'showlogin',])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



Route::get('/template', function () {
    return view('Template.base');
});





