<?php

use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\DetectionController;
use App\Http\Controllers\user\InteractionController;
use App\Http\Controllers\user\ProfileController;
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
Route::get('/about', function () {
    return view('user.about');
});


Route::group(['prefix' => 'detection', 'as' => 'detection.'], function () {
    route::get('/index', [DetectionController::class, 'index'])->name('index');
    route::get('/make', [DetectionController::class, 'makeDetection'])->name('make');
    route::get('/dosage', [DetectionController::class, 'dosage'])->name('dosage');
});


Route::group(['prefix' => 'interaction', 'as' => 'interaction.'], function () {
    route::get('/index', [InteractionController::class, 'index'])->name('index');
    route::get('/make', [InteractionController::class, 'makeInteraction'])->name('make');
});


Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    route::get('/index', [BlogController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    route::get('/index', [ProfileController::class, 'index'])->name('index');
});
