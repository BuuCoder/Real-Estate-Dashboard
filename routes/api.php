<?php
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('check-health', function () {
        return response()->json(['status' => 'OK'], 200);
    });

    Route::prefix('listings')->group(function () {
        Route::get('/', [App\Http\Controllers\Api\ListingController::class, 'index']);
        Route::get('/{id}', [App\Http\Controllers\Api\ListingController::class, 'show']);
    });
});