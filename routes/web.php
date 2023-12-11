<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::post('/dashboard/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/dashboard/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/dashboard/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
