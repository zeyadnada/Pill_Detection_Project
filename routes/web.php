<?php

use App\Http\Controllers\user\DetectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});



Route::group(['prefix' => 'detection', 'as' => 'detection.'], function () {
    route::get('/index', [DetectionController::class, 'index'])->name('index');
});