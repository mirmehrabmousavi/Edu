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

Route::get('/',[\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses', [\App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::get('/teachers', [\App\Http\Controllers\HomeController::class, 'teachers'])->name('teachers');
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [\App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');

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
    //Course
    Route::get('course', [\App\Http\Controllers\Admin\CourseController::class, 'indexCourse'])->name('admin.indexCourse');
    Route::get('course/create', [\App\Http\Controllers\Admin\CourseController::class, 'createCourse'])->name('admin.createCourse');
    Route::post('course/create', [\App\Http\Controllers\Admin\CourseController::class, 'storeFirstCourse'])->name('admin.storeFirstCourse');
    Route::get('course/edit/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'editCourse'])->name('admin.editCourse');
    Route::patch('course/edit/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'updateCourse'])->name('admin.updateCourse');
    Route::delete('course/delete/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'deleteCourse'])->name('admin.deleteCourse');
    //Lesson
    Route::get('lesson', [\App\Http\Controllers\Admin\LessonController::class, 'indexLesson'])->name('admin.indexLesson');
    Route::get('lesson/create', [\App\Http\Controllers\Admin\LessonController::class, 'createLesson'])->name('admin.createLesson');
    Route::post('lesson/create', [\App\Http\Controllers\Admin\LessonController::class, 'storeLesson'])->name('admin.storeLesson');
    Route::get('lesson/edit/{id}', [\App\Http\Controllers\Admin\LessonController::class, 'editLesson'])->name('admin.editLesson');
    Route::patch('lesson/edit/{id}', [\App\Http\Controllers\Admin\LessonController::class, 'updateLesson'])->name('admin.updateLesson');
    Route::delete('lesson/delete/{id}', [\App\Http\Controllers\Admin\LessonController::class, 'deleteLesson'])->name('admin.deleteLesson');
    //Users
    Route::get('user', [\App\Http\Controllers\Admin\UserController::class, 'indexUser'])->name('admin.indexUser');
});
