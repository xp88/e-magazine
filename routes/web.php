<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\QtTinController;
use App\Http\Controllers\QtLoaitinController;

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

Route::get('/', [TinController::class, 'index']);
Route::get('tin/{id}', [TinController::class, 'chitiettin']) ->name('tin');
Route::get('ttl/{id}', [TinController::class, 'tintrongloai']) ->name('ttl');
Route::get('lienhe/', [TinController::class,'lienhe']);
Route::get('baocao/', [TinController::class,'baocao']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('quantri', function () {
    return view("admin/index");
})->middleware('auth', 'Quantri');

Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('quantrithanhvien', 'ThanhVienController');
    Route::resource('quantriloaitin',  App\Http\Controllers\QtLoaitinController::class);
    Route::resource('quantritin',  App\Http\Controllers\QtTinController::class);
    Route::resource('quantritintuc', 'TintucController');
    Route::resource('quantriykien', 'YkienController');
    Route::resource('quantritheloai',  App\Http\Controllers\QtTheloaiController::class);
});
// Route::group(['middleware' => ['auth','Quantri']], function () {
//     Route::resource('loaitin',  App\Http\Controllers\QtLoaitinController::class);
//     Route::resource('tin',  App\Http\Controllers\QtTinController::class);

// });

