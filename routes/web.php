<?PHP
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/booking', [BookingController::class, 'index'])->name('booking');