<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog/{post:slug}', [HomeController::class, 'post']);
Route::get('/search', [HomeController::class, 'search']);

Route::post('/login', [HomeController::class, 'authenticate']);
Route::post('/logout', [HomeController::class, 'logout']);

Route::post('/register', [HomeController::class, 'store']);

// Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');;

// Route::get('/dashboard/blog/checkSlug', [AdminBlogController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/blog', AdminBlogController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('auth');

