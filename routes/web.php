<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContraindicationsSelectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PillController;
use App\Http\Controllers\PillsInteractionController;
use App\Http\Controllers\SideEffectsSelectionController;
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
    return view('welcome');
});

///Admin routes///

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::resource('blog', BlogController::class);
Route::resource('blogCategory', BlogCategoryController::class);
Route::resource('pill', PillController::class);
Route::resource('sideEffectsSelection', SideEffectsSelectionController::class);
Route::resource('contraindicationsSelection', ContraindicationsSelectionController::class);
Route::resource('pillsInteraction', PillsInteractionController::class);