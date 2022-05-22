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
    //Settings
    Route::get('settings', [\App\Http\Controllers\Admin\AdminController::class, 'settings'])->name('admin.settings');
    Route::patch('settings/update', [\App\Http\Controllers\Admin\AdminController::class, 'settingsUpdate'])->name('admin.settings.update');
    Route::patch('password/update', [\App\Http\Controllers\Admin\AdminController::class, 'passwordUpdate'])->name('admin.password.update');
    //Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'indexCategory'])->name('admin.indexCategory');
    Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'editCategory'])->name('admin.editCategory');
    Route::patch('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::delete('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');
});
