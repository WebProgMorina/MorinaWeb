<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFControllerB;
use App\Http\Controllers\PDFControllerC;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\PaketAController;
use App\Http\Controllers\PaketBController;
use App\Http\Controllers\PaketCController;
use App\Http\Controllers\SiswaPaketAController;
use App\Http\Controllers\PageController;



Route::get('/info-a', [PageController::class, 'showInfoA']);


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

    Route::get('/view', [PDFController::class, 'view'])->name('pdf.view');

    Route::get('/viewB', [PDFControllerB::class, 'view'])->name('pdfB.view');

    Route::get('/viewC', [PDFControllerC::class, 'view'])->name('pdfC.view');
});



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

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    route::get('admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

    Route::resource('paketa', PaketAController::class)->except(['show']);
    Route::resource('paketb', PaketBController::class)->except(['show']);
    Route::resource('paketc', PaketCController::class)->except(['show']);
    Route::resource('siswapaketa', SiswaPaketAController::class)->except(['show']);

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

    Route::get('/pdfC', [PDFControllerC::class, 'index'])->name('pdfC.index');
    Route::post('/pdfC/upload', [PDFControllerC::class, 'upload'])->name('pdfC.upload');
    Route::get('/pdfC/{id}', [PDFControllerC::class, 'show'])->name('pdfC.show');
    Route::delete('/pdfC/destroy/{id}', [PDFControllerC::class, 'destroy'])->name('pdfC.destroy');

    Route::get('/pdfB', [PDFControllerB::class, 'index'])->name('pdfB.index');
    Route::post('/pdfB/upload', [PDFControllerB::class, 'upload'])->name('pdfB.upload');
    Route::get('/pdfB/{id}', [PDFControllerB::class, 'show'])->name('pdfB.show');
    Route::delete('/pdfB/destroy/{id}', [PDFControllerB::class, 'destroy'])->name('pdfB.destroy');

    Route::get('/pdf', [PDFController::class, 'index'])->name('pdf.index');
    Route::post('/pdf/upload', [PDFController::class, 'upload'])->name('pdf.upload');
    Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('pdf.show');
    Route::delete('/pdf/destroy/{id}', [PDFController::class, 'destroy'])->name('pdf.destroy');
});