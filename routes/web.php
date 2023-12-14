<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RegisterController;


use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/landing', function () {
    return view('welcome');
});


Route::get('/home', function () {
    // return env('MY_NAME');
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);



Route::get('/posts', [HomeController::class, 'getPosts']);


Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show');


Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/search', [SearchController::class, 'index'])->name('home.search');

// Route::post('/comments', 'CommentController@store')->name('comments.store');


Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments/like', [CommentController::class, 'likeComment'])->name('comments.like');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['admin'])->group(function () {
    // Xác nhận email
    // Route::get('/verify-email', [VerificationController::class, 'show'])->name('verification.notice');
    // Route::get('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    // Route::post('/resend-verification', [VerificationController::class, 'resend'])->name('verification.resend');
    // Các route cần bảo vệ bởi middleware admin
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('create-post');
    Route::post('/admin/posts', [AdminPostController::class, 'store'])->name('posts.store');
    Route::get('/admin/posts/manage', [AdminPostController::class, 'managePosts'])->name('manage-post');
    Route::get('/admin/posts/edit/{post_id}', [AdminPostController::class, 'edit'])->name('admin.edit-post');
    Route::put('/admin/posts/update/{post_id}', [AdminPostController::class, 'update'])->name('admin.update-post');
    Route::delete('/admin/posts/delete/{post}', [AdminPostController::class, 'destroy'])->name('admin.delete-post');
});
