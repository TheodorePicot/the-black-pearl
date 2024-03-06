<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TreasureController;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('ships.resources', ResourceController::class)->only([
    'index'
]);

Route::resource('ships.treasures', TreasureController::class)->only([
    'index'
]);

require __DIR__.'/auth.php';
