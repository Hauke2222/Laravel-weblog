<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogItemController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardWriterController;
use App\Http\Controllers\CommentController;
use App\Mail\WeeklyBlogDigest;

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
Route::resource('blogs', BlogItemController::class);

Route::redirect('/', '/blogs');

Route::resource('writers', DashboardWriterController::class);

Route::resource('admins', DashboardAdminController::class);

Route::resource('comment', CommentController::class);

Route::get('/email', function(){
    return new WeeklyBlogDigest();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
