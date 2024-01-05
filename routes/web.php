<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\TestController;
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

Route::middleware(['auth', 'verified'])->group(function() {
    Route::redirect('/', 'dashboard', 301);
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

Route::name('profile.')->group(function() {

    Route::get('profile', [ProfileController::class, 'overview'])
        ->name('overview');

    Route::view('profile/settings', 'livewire.pages.profile.settings')
        ->name('settings');

    // Route::get('/test', [TestController::class, 'index']);

});

});

require __DIR__.'/auth.php';
