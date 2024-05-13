<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomestayController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/homestay/{homestay:title_slug}', [HomestayController::class, 'index'])->name('homestay');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/homestay/create', [HomestayController::class, 'create'])->name('create.homestay');
    Route::post('/admin/homestay/store', [HomestayController::class, 'store'])->name('store.homestay');
});