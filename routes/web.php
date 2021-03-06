<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogItemController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardWriterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Mail\WeeklyBlogDigest;
use Illuminate\Support\Facades\Mail;

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
Route::redirect('/', '/blogs');

Route::resource('blogs', BlogItemController::class);

Route::resource('users', UserController::class)->middleware('auth');

Route::resource('writers', DashboardWriterController::class)->middleware('role:writer');

Route::resource('admins', DashboardAdminController::class)->middleware('role:admin');

Route::resource('comment', CommentController::class)->middleware('auth');

Route::resource('payments', PaymentController::class)->middleware('auth');

Auth::routes();

Route::resource('blogs', BlogItemController::class)->only([
    'create', 'store', 'update', 'destroy'
    ])->middleware('role:writer');

Route::resource('blogs', BlogItemController::class)->only([
    'store', 'update',
    ])->middleware('throttle:store_blog');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
