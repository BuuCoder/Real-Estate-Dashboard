<?php
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('check-health', function () {
        return response()->json(['status' => 'OK'], 200);
    });

    Route::get('/meta_listing', [App\Http\Controllers\Api\ListingController::class, 'meta']);
    Route::get('/meta_post', [App\Http\Controllers\Api\PostController::class, 'meta']);

    Route::prefix('listings')->group(function () {
        Route::get('/', [App\Http\Controllers\Api\ListingController::class, 'index']);
        Route::get('/{slug}', [App\Http\Controllers\Api\ListingController::class, 'show']);
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', [App\Http\Controllers\Api\PostController::class, 'index']);
        Route::get('/{slug}', [App\Http\Controllers\Api\PostController::class, 'show']);
    });

    Route::post('/contact-us', [App\Http\Controllers\Api\ContactController::class, 'store']);
});