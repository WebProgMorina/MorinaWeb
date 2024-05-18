<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaketAController;
use App\Http\Controllers\PaketBController;
use App\Http\Controllers\PaketCController;
use App\Http\Controllers\SiswaPaketAController;
use Illuminate\Support\Facades\Route;

Route::resource('paketa', PaketAController::class)->except(['show']);
Route::resource('paketb', PaketBController::class)->except(['show']);
Route::resource('paketc', PaketCController::class)->except(['show']);
Route::resource('siswapaketa', SiswaPaketAController::class)->except(['show']);
 // Changed from 'paketa' to 'siswapaketa'

Route::get('/siswapaketa', [SiswaPaketaController::class, 'index'])->name('siswapaketa');
Route::get('/paketa', [PaketAController::class, 'index'])->name('paketa.index');
Route::get('/paketa/create', [PaketAController::class, 'create'])->name('paketa.create');
Route::post('/paketa', [PaketAController::class, 'store'])->name('paketa.store');

Route::get('/paketb', [PaketBController::class, 'index'])->name('paketb.index');
Route::get('/paketb/create', [PaketBController::class, 'create'])->name('paketb.create');
Route::post('/paketb', [PaketBController::class, 'store'])->name('paketb.store');

Route::get('/paketc', [PaketCController::class, 'index'])->name('paketc.index');
Route::get('/paketc/create', [PaketCController::class, 'create'])->name('paketc.create');
Route::post('/paketc', [PaketCController::class, 'store'])->name('paketc.store');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

