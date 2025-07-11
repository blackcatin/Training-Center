<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ModuleController;


Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index'); 
    Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store'); 
    Route::get('/modules/create', [ModuleController::class, "create"])->name('modules.create');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';