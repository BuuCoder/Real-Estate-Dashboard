<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeoDashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('users', UserController::class);
    Route::get('/geo', [GeoDashboardController::class, 'index'])->name('geo.dashboard');
    Route::get('/geo/wards/{provinceCode}', [GeoDashboardController::class, 'getWardsByProvince'])->name('geo.wards.by_province');
    Route::resource('listings', ListingController::class);
    
    // Search
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    
    // Post CRUD
    Route::resource('posts', PostController::class);
    Route::get('posts/{post}/share', [PostController::class, 'share'])->name('posts.share');

    // PostType CRUD
    Route::get('post-types', [PostController::class, 'postTypesIndex'])->name('post_types.index');
    Route::get('post-types/create', function() {
        return view('post_types.create');
    })->name('post_types.create');
    Route::post('post-types', [PostController::class, 'postTypesStore'])->name('post_types.store');
    Route::get('post-types/{postType}/edit', function($id) {
        $postType = \App\Models\PostType::findOrFail($id);
        return view('post_types.edit', compact('postType'));
    })->name('post_types.edit');
    Route::put('post-types/{postType}', [PostController::class, 'postTypesUpdate'])->name('post_types.update');
    Route::delete('post-types/{postType}', [PostController::class, 'postTypesDestroy'])->name('post_types.destroy');

    // Tag CRUD
    Route::get('tags', [PostController::class, 'tagsIndex'])->name('tags.index');
    Route::get('tags/create', function() {
        return view('tags.create');
    })->name('tags.create');
    Route::post('tags', [PostController::class, 'tagsStore'])->name('tags.store');
    Route::get('tags/{tag}/edit', function($id) {
        $tag = \App\Models\Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    })->name('tags.edit');
    Route::put('tags/{tag}', [PostController::class, 'tagsUpdate'])->name('tags.update');
    Route::delete('tags/{tag}', [PostController::class, 'tagsDestroy'])->name('tags.destroy');
});
