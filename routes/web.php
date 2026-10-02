<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes - Portofolio Muhammad Rofiq
|--------------------------------------------------------------------------
|
| 1. Halaman Beranda (Ucapan Selamat Datang)
| 2. Halaman Data Diri & Foto
| 3. Halaman Aktivitas
| 4. Halaman Kontak
|
*/

// Halaman 1: Beranda / Welcome
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Halaman 2: Data Diri & Foto
Route::get('/tentang-saya', [PortfolioController::class, 'about'])->name('about');

// Halaman 3: Aktivitas
Route::get('/aktivitas', [PortfolioController::class, 'activities'])->name('activities');

// Halaman 4: Kontak
Route::get('/kontak', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/kontak', [PortfolioController::class, 'submitContact'])->name('contact.submit');

// Fitur Unduh CV
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');

