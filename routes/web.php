<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SepatuController::class, 'index'])->name('home');

Route::get('/shop', [SepatuController::class, 'shop'])->name('shop');

Route::get('/pay', [SepatuController::class, 'pay'])->name('pay');
