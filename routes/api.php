<?php
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('check-health', function () {
        return response()->json(['status' => 'OK'], 200);
    });
});