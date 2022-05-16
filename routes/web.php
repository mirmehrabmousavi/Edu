<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', ['middleware' => 'admin']], function () {
   Route::get('home', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
   Route::get('settings', [\App\Http\Controllers\Admin\AdminController::class, 'settings'])->name('admin.settings');
   Route::patch('settings/update', [\App\Http\Controllers\Admin\AdminController::class, 'settingsUpdate'])->name('admin.settings.update');
   Route::patch('password/update', [\App\Http\Controllers\Admin\AdminController::class, 'passwordUpdate'])->name('admin.password.update');
});
