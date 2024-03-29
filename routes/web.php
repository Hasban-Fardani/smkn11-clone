<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PageController;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;

use App\Livewire\Post\Index as PostIndex;
use App\Livewire\Post\Show as PostShow;

use App\Livewire\CreatorPost;
use App\Livewire\Dashboard\Admin;
use App\Livewire\Dashboard\Creator;
use App\Livewire\PostCategory;

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

Route::get('/', [PageController::class, 'index'])
    ->name('home');
Route::view('/tentang', 'about')
    ->name('tentang');
Route::view('/struktur-organisasi', 'struktur-organisasi')
    ->name('struktur-organisasi');
Route::view('/guru-dan-tenaga-kependidikan', 'guru-dan-tenaga-kependidikan')
    ->name('guru-dan-tenaga-kependidikan');
Route::view('/sarana-dan-prasarana', 'sarana-dan-prasarana')
    ->name('sarana-dan-prasarana');
Route::view('/kontak', 'kontak')
    ->name('kontak');

Route::get('/posts', PostIndex::class)
    ->name('posts.index');
Route::get('/posts/{post:slug}', PostShow::class)
    ->name('posts.show');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');

    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('can:creator')->prefix('creator')->group(function () {
    Route::get('/dashboard', Creator::class)
        ->name('creator.dashboard');
});

Route::middleware('can:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', Admin::class)
        ->name('admin.dashboard');
});

Route::middleware('can:create-post')->group(function () {
    Route::get('/creator-post', CreatorPost::class)->name('creator-post');

    Route::get('/categories', PostCategory::class)->name('post-categories');
});
