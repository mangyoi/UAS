<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [AdminController::class, 'home'])->name('home');

Route::get('/shop', [AdminController::class, 'shop'])->name('shop');


// Route::get('/index/{id}', 'SepatuController@show');
// // Route::get('/admin/index/{id}','SepatuController@show');
// Route::get('/index', [SepatuController::class, 'show'])->name('show');

Route::get('/pay', [SepatuController::class,'create']);


Route::resource('sepatu', SepatuController::class);

Route::resource('admin', AdminController::class);
Route::get('/Listsepatu', [AdminController::class,'create']);

Route::get('exportExcel', [SepatuController::class, 'exportExcel'])->name('sepatu.exportExcel');


