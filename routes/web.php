<?php

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

// Auth::routes();
Route::prefix('master')->name('master.')->group(function () {
    Route::resource('nasabah', App\Http\Controllers\TmnasabahController::class);
});
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/index.html', [App\Http\Controllers\HomeController::class, 'index'])->name('index.html');
    //  settiing

    Route::prefix('setting')->name('setting.')->group(function () {
        Route::resource('menu', App\Http\Controllers\MenuController::class);
        Route::resource('user', App\Http\Controllers\UserController::class);
        // Route::resource('level', App\Http\Controllers\MenuController::class);
    });
    // datatable use function only

    Route::prefix('api')->name('api.')->group(function () {
        Route::post('menu', [App\Http\Controllers\MenuController::class, 'api'])->name('menu');
        Route::post('nasabah', [App\Http\Controllers\TmnasabahController::class, 'api'])->name('nasabah');
    });
});

Auth::routes();
