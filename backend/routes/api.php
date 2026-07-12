<?php

use App\Http\Controllers\Api\V1\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Api\V1\Admin\PackageController as AdminPackageController;
use App\Http\Controllers\Api\V1\Admin\TourController as AdminTourController;
use App\Http\Controllers\Api\V1\Admin\UserController as AdminUserController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\BookingController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\PublicCatalogController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (): void {
    Route::get('/tours', [PublicCatalogController::class, 'tours']);
    Route::get('/tours/{tour}', [PublicCatalogController::class, 'tour']);
    Route::get('/packages', [PublicCatalogController::class, 'packages']);
    Route::get('/packages/{package}', [PublicCatalogController::class, 'package']);
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function (): void {
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::get('/me', [ProfileController::class, 'show']);
        Route::put('/profile', [ProfileController::class, 'update']);
        Route::get('/bookings', [BookingController::class, 'index']);
        Route::post('/bookings', [BookingController::class, 'store']);

        Route::middleware('admin')->prefix('admin')->group(function (): void {
            Route::apiResource('users', AdminUserController::class);
            Route::apiResource('tours', AdminTourController::class);
            Route::apiResource('packages', AdminPackageController::class);
            Route::get('bookings', [AdminBookingController::class, 'index']);
            Route::patch('bookings/{booking}/status', [AdminBookingController::class, 'updateStatus']);
        });
    });
});
