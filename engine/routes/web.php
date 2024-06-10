<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DormsController;
use App\Http\Controllers\dataKamarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\AuthController;

// Middleware
$middleware = ['auth'];

// Grouping
Route::middleware($middleware)->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/harga', 'hargaController@index')->name('harga');
    Route::get('/jenisKamar', 'jenisKamarController@index')->name('jenisKamar');
    Route::get('/noKamar', 'noKamarController@index')->name('noKamar');
    
    // hargaController
    Route::get('/harga', 'hargaController@index')->name('harga.index');
    Route::get('/hargacreate', 'hargaController@create')->name('harga.create');
    Route::post('/harga', 'hargaController@store')->name('harga.store');
    Route::get('/harga/{id}/edit', 'hargaController@edit')->name('harga.edit');
    Route::put('/harga/{id}', 'hargaController@update')->name('harga.update');
    Route::delete('/harga/{id}', 'hargaController@destroy')->name('harga.destroy');
    
    // jenisKamarController
    Route::get('/jenisKamar', 'jenisKamarController@index')->name('jenisKamar.index');
    Route::get('/jenisKamarcreate', 'jenisKamarController@create')->name('jenisKamar.create');
    Route::post('/jenisKamar', 'jenisKamarController@store')->name('jenisKamar.store');
    Route::get('/jenisKamar/{id}/edit', 'jenisKamarController@edit')->name('jenisKamar.edit');
    Route::put('/jenisKamar/{id}', 'jenisKamarController@update')->name('jenisKamar.update');
    Route::delete('/jenisKamar/{id}', 'jenisKamarController@destroy')->name('jenisKamar.destroy');
    
    // noKamarController
    Route::get('/noKamar', 'noKamarController@index')->name('noKamar.index');
    Route::get('/noKamarcreate', 'noKamarController@create')->name('noKamar.create');
    Route::post('/noKamar', 'noKamarController@store')->name('noKamar.store');
    Route::get('/noKamar/{id}/edit', 'noKamarController@edit')->name('noKamar.edit');
    Route::put('/noKamar/{id}', 'noKamarController@update')->name('noKamar.update');
    Route::delete('/noKamar/{id}', 'noKamarController@destroy')->name('noKamar.destroy');
    
    // dataKamarController
    Route::get('/dataKamar', 'dataKamarController@index')->name('dataKamar.index');
    Route::get('/dataKamarcreate', 'dataKamarController@create')->name('dataKamar.create');
    Route::post('/dataKamar', 'dataKamarController@store')->name('dataKamar.store');
    Route::get('/dataKamar/{id}/edit', 'dataKamarController@edit')->name('dataKamar.edit');
    Route::post('/dataKamar/{id}', 'dataKamarController@update')->name('dataKamar.update');
    Route::delete('/dataKamar/{id}', 'dataKamarController@destroy')->name('dataKamar.destroy');
    
    // Lainnya
    // Route::post('/logout', 'AuthController@logout')->name('logout');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::any('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels');
    Route::get('/dorms', [DormsController::class, 'index'])->name('dorms');

    Route::get('/junior', [HotelsController::class, 'junior'])->name('junior');
    Route::get('/exec', [HotelsController::class, 'exec'])->name('exec');
    Route::get('/super', [HotelsController::class, 'super'])->name('super');

    Route::any('/bookgv', [HotelsController::class, 'bookgv'])->name('bookgv');
    Route::get('/bookuo', [HotelsController::class, 'bookuo'])->name('bookuo');
    Route::get('/bookmm', [HotelsController::class, 'bookmm'])->name('bookmm');
    Route::get('/bookhv', [HotelsController::class, 'bookhv'])->name('bookhv');
    Route::get('/bookre', [HotelsController::class, 'bookre'])->name('bookre');
    Route::get('/bookob', [HotelsController::class, 'bookob'])->name('bookob');
    Route::get('/bookah', [HotelsController::class, 'bookah'])->name('bookah');
    Route::get('/bookeg', [HotelsController::class, 'bookeg'])->name('bookeg');
    Route::get('/booktb', [HotelsController::class, 'booktb'])->name('booktb');
    Route::any('/checkout', [HotelsController::class, 'checkout'])->name('checkout');
    Route::post('/checkout1', [bookingController::class, 'store'])->name('checkout.store');
    Route::any('/end', [HotelsController::class, 'end'])->name('end');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('LoginRegister.register.form');
Route::post('/register', [AuthController::class, 'register'])->name('LoginRegister.register');
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot.password.form');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('forgot.password.email');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('LoginRegister.index.form');
Route::post('/login', [AuthController::class, 'login'])->name('LoginRegister.index');

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [HomeController::class, 'index']);

// Route::get('/dataKamar', [dataKamarController::class, 'index']);