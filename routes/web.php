<?PHP
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomestayController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/homestay/{homestay:title_slug}', [HomestayController::class, 'index'])->name('homestay');