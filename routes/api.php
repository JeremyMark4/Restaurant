<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\controllers\AuthController;

route::post('/register',[AuthController::class,'register']);
route::post('/login',[AuthController::class,'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'category' => CategoryController::class,
]);