<?php

use App\Http\Controllers\Api\V1\GalleryController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix("users")->group(function () {
    Route::get("/all", [UserController::class, "all"]);
    Route::post("/store", [UserController::class, "store"]);
    Route::post("/changeAvatar", [UserController::class, "changeAvatar"]);
});

Route::prefix("gallery")->group(function () {
    Route::get("/all", [GalleryController::class, "all"]);
    Route::post("/store", [GalleryController::class, "store"]);
    Route::post("/newPicture", [GalleryController::class, "addPicture"]);
    Route::post("/newGuest", [GalleryController::class, "addGuest"]);
});


