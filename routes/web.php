<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

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
Route::get('/pdfs', [PDFController::class, 'index'])->name('pdf.index');
Route::post('/upload-pdf', [PDFController::class, 'upload'])->name('upload.pdf');
Route::get('/pdfs/{id}', [PDFController::class, 'show'])->name('pdf.show');
Route::delete('/pdfs/{id}', [PDFController::class, 'destroy'])->name('pdf.destroy');


require __DIR__.'/auth.php';
