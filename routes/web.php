<?php

use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\DetectionController;
use App\Http\Controllers\user\InteractionController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
Route::get('/about', function () {
    return view('user.about');
});
route::group(['middleware' => 'myGust'], function () {
    Route::get('/login', function () {
        return view('user.authentication.login');
    });
    Route::get('/register', function () {
        return view('user.authentication.register');
    });
    route::post('/login', [UserController::class, 'login'])->name('login');
    route::post('/register', [UserController::class, 'register'])->name('register');
});
route::group(['middleware' => 'myAuth'], function () {
    
    Route::get('/', function () {
        return view('user.index');
    });
    // route::get('/profile', function () {
    //     return view('profile');
    // });

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
        // route::get('/index', [BlogController::class, 'index'])->name('index');

        Route::get('/index', [BlogController::class, 'index'])->name('index');
        Route::get('/search', [BlogController::class, 'search'])->name('search');
        Route::get('/show', [BlogController::class, 'show'])->name("show");
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        route::get('/index', [ProfileController::class, 'index'])->name('index');
    });

    route::get('/logout',[UserController::class,'logout'])->name('logout');
});
