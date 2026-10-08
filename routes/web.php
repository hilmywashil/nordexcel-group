<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/portofolio', [PageController::class, 'portofolio'])->name('portofolio');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/artikel', [PageController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [PageController::class, 'artikelDetail'])->name('artikel.detail');
Route::get('/klien', [PageController::class, 'klien'])->name('klien');

Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');