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
Route::get('/pdf', [PDFController::class, 'index'])->name('pdf.index');
Route::post('/pdf/upload', [PDFController::class, 'upload'])->name('pdf.upload');
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('pdf.show');
Route::get('/view', [PDFController::class, 'view'])->name('pdf.view');
Route::delete('/pdf/destroy/{id}', [PDFController::class, 'destroy'])->name('pdf.destroy');


// Routes for LibraryB

Route::get('/pdfB', [PDFControllerB::class, 'index'])->name('pdfB.index');
Route::post('/pdfB/upload', [PDFControllerB::class, 'upload'])->name('pdfB.upload');
Route::get('/pdfB/{id}', [PDFControllerB::class, 'show'])->name('pdfB.show');
Route::get('/viewB', [PDFControllerB::class, 'view'])->name('pdfB.view');
Route::delete('/pdfB/destroy/{id}', [PDFControllerB::class, 'destroy'])->name('pdfB.destroy');


// Routes for LibraryC
Route::get('/pdfC', [PDFControllerC::class, 'index'])->name('pdfC.index');
Route::post('/pdfC/upload', [PDFControllerC::class, 'upload'])->name('pdfC.upload');
Route::get('/pdfC/{id}', [PDFControllerC::class, 'show'])->name('pdfC.show');
Route::get('/viewC', [PDFControllerC::class, 'view'])->name('pdfC.view');
Route::delete('/pdfC/destroy/{id}', [PDFControllerC::class, 'destroy'])->name('pdfC.destroy');



require __DIR__ . '/auth.php';
