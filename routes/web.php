<?php

use App\Livewire\Pages\Crew\CrewIndex;
use App\Livewire\Pages\Resources\ResourceIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Treasures\TreasureIndex;
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


Route::middleware(['auth', 'captain'])->group(function () {
    Route::get('resources', ResourceIndex::class)
        ->name('resources');

    Route::get('treasures', TreasureIndex::class)
        ->name('treasures');

    Route::get('crew', CrewIndex::class)
        ->name('crew');
});

require __DIR__.'/auth.php';
