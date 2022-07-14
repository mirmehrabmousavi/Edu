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

//Index
Route::get('/',[\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/courses', [\App\Http\Controllers\IndexController::class, 'courses'])->name('courses');
Route::get('/courses/category/{id}', [\App\Http\Controllers\IndexController::class, 'coursesCat'])->name('coursesCat');
Route::get('/courses/{id}', [\App\Http\Controllers\IndexController::class, 'courseShow'])->name('course.show');
Route::get('/classes', [\App\Http\Controllers\IndexController::class, 'classes'])->name('classes');
Route::get('/teachers', [\App\Http\Controllers\IndexController::class, 'teachers'])->name('teachers');
Route::get('/placement', [\App\Http\Controllers\IndexController::class, 'createPlacement'])->name('addPlacement');
Route::post('/placement', [\App\Http\Controllers\IndexController::class, 'storePlacement'])->name('storePlacement');
Route::get('/blog', [\App\Http\Controllers\IndexController::class, 'allBlog'])->name('allBlog');
Route::get('/blog/{id}', [\App\Http\Controllers\IndexController::class, 'showBlog'])->name('showBlog');
Route::get('/aboutus', [\App\Http\Controllers\IndexController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [\App\Http\Controllers\IndexController::class, 'contactus'])->name('contactus');

//Language Flag
Route::get('/course/english', [\App\Http\Controllers\FlagController::class, 'courseEnglish'])->name('course.english');
Route::get('/course/spanish', [\App\Http\Controllers\FlagController::class, 'courseSpanish'])->name('course.spanish');
Route::get('/course/french', [\App\Http\Controllers\FlagController::class, 'courseFrench'])->name('course.french');
Route::get('/course/russian', [\App\Http\Controllers\FlagController::class, 'courseRussian'])->name('course.russian');
Route::get('/course/turkish', [\App\Http\Controllers\FlagController::class, 'courseTurkish'])->name('course.turkish');
Route::get('/course/chinese', [\App\Http\Controllers\FlagController::class, 'courseChinese'])->name('course.chinese');
Route::get('/course/italy', [\App\Http\Controllers\FlagController::class, 'courseItaly'])->name('course.italy');
Route::get('/course/germany', [\App\Http\Controllers\FlagController::class, 'courseGermany'])->name('course.germany');
Route::get('/course/arabic', [\App\Http\Controllers\FlagController::class, 'courseArabic'])->name('course.arabic');

//Auth
Auth::routes();

//CKEditor
Route::get('ckeditor', [\App\Http\Controllers\HomeController::class, 'ckindex']);
Route::post('ckeditor/upload', [\App\Http\Controllers\HomeController::class, 'ckupdate'])->name('ckeditor.upload');

//User
Route::group(['middleware' => 'auth','teacher'], function () {
    //User Dashboard
    Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Course
    Route::get('/my-course', [\App\Http\Controllers\HomeController::class, 'myCourse'])->name('myCourse');
    Route::get('/add-course', [\App\Http\Controllers\HomeController::class, 'addCourse'])->name('addCourse');
    Route::post('/add-course', [\App\Http\Controllers\HomeController::class, 'storeCourse'])->name('storeCourse');
    Route::get('/edit-course/{id}/', [\App\Http\Controllers\HomeController::class, 'editCourse'])->name('editCourse');
    Route::patch('/edit-course/{id}/', [\App\Http\Controllers\HomeController::class, 'updateCourse'])->name('updateCourse');
    Route::patch('/edit-course/{id}/', [\App\Http\Controllers\HomeController::class, 'updateCourse'])->name('updateCourse');
    //Lesson
    Route::get('/my-lesson', [\App\Http\Controllers\HomeController::class, 'myLesson'])->name('myLesson');
    Route::get('/add-lesson', [\App\Http\Controllers\HomeController::class, 'addLesson'])->name('addLesson');
    Route::post('/add-lesson', [\App\Http\Controllers\HomeController::class, 'storeLesson'])->name('storeLesson');
    Route::get('/edit-lesson/{id}/', [\App\Http\Controllers\HomeController::class, 'editLesson'])->name('editLesson');
    Route::patch('/edit-lesson/{id}/', [\App\Http\Controllers\HomeController::class, 'updateLesson'])->name('updateLesson');
    Route::delete('/delete-lesson/{id}/', [\App\Http\Controllers\HomeController::class, 'deleteLesson'])->name('deleteLesson');
    //Class
    Route::get('/my-class', [\App\Http\Controllers\ClassController::class, 'myClass'])->name('myClass');
    Route::get('/add-class', [\App\Http\Controllers\ClassController::class, 'addClass'])->name('addClass');
    Route::post('/add-class', [\App\Http\Controllers\ClassController::class, 'storeClass'])->name('storeClass');
    Route::get('/edit-class/{id}', [\App\Http\Controllers\ClassController::class, 'editClass'])->name('editClass');
    Route::patch('/edit-class/{id}', [\App\Http\Controllers\ClassController::class, 'updateClass'])->name('updateClass');
    Route::delete('/delete-class/{id}', [\App\Http\Controllers\ClassController::class, 'deleteClass'])->name('deleteClass');
    //PurchasedCourse
    Route::get('/purchased-course', [\App\Http\Controllers\HomeController::class, 'purchasedCourse'])->name('purchasedCourse');
    //SavedCourse
    Route::get('/saved-course', [\App\Http\Controllers\HomeController::class, 'savedCourse'])->name('savedCourse');
    Route::patch('/addToSavedCourse/{id}', [\App\Http\Controllers\HomeController::class, 'addToSavedCourse'])->name('addToSavedCourse');
    //Pays
    Route::get('/my-pays', [\App\Http\Controllers\HomeController::class, 'myPays'])->name('myPays');
    //MyAccount
    Route::get('/my-account', [\App\Http\Controllers\HomeController::class, 'myAccount'])->name('myAccount');
    Route::patch('/my-account', [\App\Http\Controllers\HomeController::class, 'settingsUpdate'])->name('settingsUpdate');
    //Ticket System
    Route::get('new-ticket', [\App\Http\Controllers\TicketController::class, 'create'])->name('ticket.create');
    Route::post('new-ticket', [\App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
    Route::get('my-tickets', [\App\Http\Controllers\TicketController::class, 'index'])->name('myTickets');
    Route::get('tickets/{ticket}', [\App\Http\Controllers\TicketController::class, 'show']);
    Route::post('comment', [\App\Http\Controllers\TicketController::class, 'postComment']);
    //collaboration
    Route::get('/collaborate', [\App\Http\Controllers\CollaborateController::class, 'createCollaborate'])->name('addCollaborate');
    Route::post('/collaborate', [\App\Http\Controllers\CollaborateController::class, 'storeCollaborate'])->name('storeCollaborate');
    //Payment
    Route::get('bill/{id}', [\App\Http\Controllers\HomeController::class, 'bill'])->name('goBilling');
    Route::get('zarin-pay/{id}/purchase', [\App\Http\Controllers\PaymentController::class, 'redirectZarin'])->name('purchase');
    Route::get('zarin-pay/{id}/purchase/result', [\App\Http\Controllers\PaymentController::class, 'zarinResult'])->name('purchase.result');
    //Route::get('zarin-pay/{id}/{d_price}', [\App\Http\Controllers\PaymentController::class, 'redirectZarin'])->name('redirectToZarinPal');
});

//Admin
Route::group(['prefix' => 'admin', ['middleware' => 'admin']], function () {
    //Admin Dashboard
    Route::get('dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    //AddComment
    Route::get('/comment', [\App\Http\Controllers\Admin\CommentController::class, 'indexComment'])->name('admin.indexComment');
    Route::get('/comment/create', [\App\Http\Controllers\Admin\CommentController::class, 'createComment'])->name('admin.createComment');
    Route::post('/comment/create', [\App\Http\Controllers\Admin\CommentController::class, 'storeComment'])->name('admin.storeComment');
    Route::get('/comment/edit/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'editComment'])->name('admin.editComment');
    Route::patch('/comment/edit/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'updateComment'])->name('admin.updateComment');
    Route::delete('/comment/delete/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'deleteComment'])->name('admin.deleteComment');
    //Zoom Class
    Route::get('/onlineClass', [\App\Http\Controllers\Admin\OnlineClassController::class, 'index'])->name('onlineClass.index');
    Route::get('/onlineClass/create', [\App\Http\Controllers\Admin\OnlineClassController::class, 'create'])->name('onlineClass.create');
    Route::post('/onlineClass/create', [\App\Http\Controllers\Admin\OnlineClassController::class, 'store'])->name('onlineClass.store');
    Route::get('/onlineClass/edit/{id}', [\App\Http\Controllers\Admin\OnlineClassController::class, 'edit'])->name('onlineClass.edit');
    Route::patch('/onlineClass/edit/{id}', [\App\Http\Controllers\Admin\OnlineClassController::class, 'update'])->name('onlineClass.update');
    Route::delete('/onlineClass/delete/{id}', [\App\Http\Controllers\Admin\OnlineClassController::class, 'destroy'])->name('onlineClass.destroy');
    //Settings
    Route::get('settings', [\App\Http\Controllers\Admin\AdminController::class, 'settings'])->name('admin.settings');
    Route::patch('settings/index/update', [\App\Http\Controllers\Admin\AdminController::class, 'indexUpdate'])->name('admin.index.update');
    Route::patch('settings/update', [\App\Http\Controllers\Admin\AdminController::class, 'settingsUpdate'])->name('admin.settings.update');
    Route::patch('password/update', [\App\Http\Controllers\Admin\AdminController::class, 'passwordUpdate'])->name('admin.password.update');
    Route::patch('social/create', [\App\Http\Controllers\Admin\AdminController::class, 'createSocial'])->name('admin.create.social');
    //Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'indexCategory'])->name('admin.indexCategory');
    Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'editCategory'])->name('admin.editCategory');
    Route::patch('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::delete('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');
    //Season
    Route::get('season', [\App\Http\Controllers\Admin\SeasonController::class, 'index'])->name('admin.indexSeason');
    Route::get('season/create', [\App\Http\Controllers\Admin\SeasonController::class, 'create'])->name('admin.createSeason');
    Route::post('season/create', [\App\Http\Controllers\Admin\SeasonController::class, 'store'])->name('admin.storeSeason');
    Route::get('season/edit/{id}', [\App\Http\Controllers\Admin\SeasonController::class, 'edit'])->name('admin.editSeason');
    Route::patch('season/edit/{id}', [\App\Http\Controllers\Admin\SeasonController::class, 'update'])->name('admin.updateSeason');
    Route::delete('season/delete/{id}', [\App\Http\Controllers\Admin\SeasonController::class, 'delete'])->name('admin.deleteSeason');
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
    //Blog
    Route::get('blog', [\App\Http\Controllers\Admin\BlogController::class, 'indexBlog'])->name('admin.indexBlog');
    Route::get('blog/create', [\App\Http\Controllers\Admin\BlogController::class, 'createBlog'])->name('admin.createBlog');
    Route::post('blog/create', [\App\Http\Controllers\Admin\BlogController::class, 'storeBlog'])->name('admin.storeBlog');
    Route::get('blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'editBlog'])->name('admin.editBlog');
    Route::patch('blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'updateBlog'])->name('admin.updateBlog');
    Route::delete('blog/delete/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'deleteBlog'])->name('admin.deleteBlog');
    //Pays
    Route::get('pays', [\App\Http\Controllers\Admin\AdminController::class, 'pays'])->name('admin.pays');
    //collaboration
    Route::get('/collaborate', [\App\Http\Controllers\CollaborateController::class, 'showCollaborate'])->name('admin.showCollaborate');
    Route::get('/collaborate/{id}', [\App\Http\Controllers\CollaborateController::class, 'singleCollaborate'])->name('admin.singleCollaborate');
    Route::delete('/collaborate/{id}', [\App\Http\Controllers\CollaborateController::class, 'deleteCollaborate'])->name('admin.deleteCollaborate');
    //Placement
    Route::get('/placement', [\App\Http\Controllers\Admin\AdminController::class, 'showPlacement'])->name('admin.showPlacement');
    Route::get('/placement/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'singlePlacement'])->name('admin.singlePlacement');
    Route::delete('/placement/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'deletePlacement'])->name('admin.deletePlacement');
    //Ticket
    Route::get('/tickets', [\App\Http\Controllers\TicketController::class, 'userTickets'])->name('admin.tickets');
    Route::post('/close_ticket/{ticket_id}', [\App\Http\Controllers\TicketController::class, 'close'])->name('admin.tickets.delete');
    //File Manager
    Route::get('file-manager', [\App\Http\Controllers\Admin\AdminController::class, 'fileManager'])->name('admin.file-manager');
});
