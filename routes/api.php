<?php
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Public routes - không cần API key
    Route::get('check-health', function () {
        return response()->json(['status' => 'OK'], 200);
    });

    // Sitemap XML - public, không cần API key
    Route::get('/sitemap.xml', [App\Http\Controllers\Api\SitemapController::class, 'index']);

    // Protected routes - cần API key
    Route::middleware('api.key')->group(function () {
        Route::get('/meta_listing', [App\Http\Controllers\Api\ListingController::class, 'meta']);
        Route::get('/meta_post', [App\Http\Controllers\Api\PostController::class, 'meta']);

        Route::prefix('listings')->group(function () {
            Route::get('/', [App\Http\Controllers\Api\ListingController::class, 'index']);
            Route::get('/{slug}', [App\Http\Controllers\Api\ListingController::class, 'show']);
        });

        Route::prefix('posts')->group(function () {
            Route::get('/', [App\Http\Controllers\Api\PostController::class, 'index']);
            Route::get('/{slug}', [App\Http\Controllers\Api\PostController::class, 'show']);
            Route::get('/{slug}/share', [App\Http\Controllers\Api\PostController::class, 'share']);
        });

        Route::post('/contact-us', [App\Http\Controllers\Api\ContactController::class, 'store']);

        Route::prefix('auth')->group(function () {
            Route::post('/register', [App\Http\Controllers\Api\ClientController::class, 'register']);
            Route::post('/login', [App\Http\Controllers\Api\ClientController::class, 'login']);
            Route::post('/login-google', [App\Http\Controllers\Api\ClientController::class, 'loginGoogle']);
        });
    });
});