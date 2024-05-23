<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PayController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsOwner;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::middleware([IsOwner::class])->group(function () {
        Route::get('/owner/homestay/create', [HomestayController::class, 'create'])->name('create.homestay');
        Route::post('/owner/homestay/store', [HomestayController::class, 'store'])->name('store.homestay');
    });

    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create.news');
        Route::post('/admin/news/store', [NewsController::class, 'store'])->name('store.news');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/homestay/{homestay:title_slug}', [HomestayController::class, 'index'])->name('homestay');

// Route::get('/pay', [PayController::class, 'index'])->name('pay');
Route::get('/news', [NewsController::class, 'index'])->name('news');

