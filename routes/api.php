<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CatalogGroupController;
use App\Http\Controllers\TemplateGroupController;
use App\Http\Controllers\TemplateValueController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['socialite.auth'])->group(function () {
    // Catalog Routes
    Route::apiResource('catalog', CatalogController::class);

    // CatalogGroup Routes
    Route::apiResource('catalog-groups', CatalogGroupController::class);

    // Template Routes
    Route::apiResource('templates', TemplateController::class);

    // TemplateGroup Routes
    Route::apiResource('template-groups', TemplateGroupController::class);

    // TemplateValue Routes
    Route::apiResource('template-values', TemplateValueController::class);

    // User Routes
    Route::apiResource('users', UserController::class);
    Route::put('/users/{id}', [UserController::class, 'update']);
});

//Testing routes
Route::apiResource('catalog', CatalogController::class);
Route::apiResource('catalog-groups', CatalogGroupController::class);
Route::apiResource('templates', TemplateController::class);
Route::apiResource('template-groups', TemplateGroupController::class);
Route::apiResource('template-values', TemplateValueController::class);
Route::apiResource('users', UserController::class);


Route::put('/users/{id}', [UserController::class, 'update']);