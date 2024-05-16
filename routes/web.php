<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaketAController;
use App\Http\Controllers\SiswaPaketAController;
use Illuminate\Support\Facades\Route;

Route::resource('paketa', PaketAController::class)->except(['show']);
Route::resource('siswapaketa', SiswaPaketAController::class)->except(['show']);
 // Changed from 'paketa' to 'siswapaketa'

Route::get('/siswapaketa', [SiswaPaketaController::class, 'index'])->name('siswapaketa');
Route::get('/paketa', [PaketaController::class, 'store'])->name('paketa');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

