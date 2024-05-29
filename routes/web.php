<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFControllerB;
use App\Http\Controllers\PDFControllerC;

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


// Routes for LibraryB
Route::get('/pdfB', [PDFControllerB::class, 'index'])->name('pdfB.index');
Route::post('/pdfB/upload', [PDFControllerB::class, 'upload'])->name('pdfB.upload');
Route::get('/pdfB/{id}', [PDFControllerB::class, 'show'])->name('pdfB.show');
Route::delete('/pdfB/destroy/{id}', [PDFControllerB::class, 'destroy'])->name('pdfB.destroy');

// Routes for LibraryC
Route::get('/pdfC', [PDFControllerC::class, 'index'])->name('pdfC.index');
Route::post('/pdfC/upload', [PDFControllerC::class, 'upload'])->name('pdfC.upload');
Route::get('/pdfC/{id}', [PDFControllerC::class, 'show'])->name('pdfC.show');
Route::delete('/pdfC/destroy/{id}', [PDFControllerC::class, 'destroy'])->name('pdfC.destroy');



require __DIR__ . '/auth.php';
