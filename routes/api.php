<?php

use App\Http\Controllers\api\PillController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::group(['middleware' => 'MyAuthApi'], function () {
    Route::get('/detection', [PillController::class, 'pillDetectionData']);
    Route::post('/userphoto', [UserController::class, 'uploadUserPhoto']);
    Route::post('/userpersonalinformation', [UserController::class, 'updatePersonalInformation']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/logout', [UserController::class, 'logout']);
});
