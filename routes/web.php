<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

use App\Services\PaymentManager;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('last');
});

/*Route::get('/buy', [PaymentController::class, 'show'])->name('buying');
Route::post('/buy', [PaymentController::class, 'get']);
Route::get('/buy/check', [PaymentController::class, 'check']);

Route::get('/discord', function () {
    return redirect()->away("https://discord.gg/yvhzsk7ZJa");
});

Route::prefix('/wiki')->group(function() {
    Route::get("/{url?}", [WikiController::class, 'show'])->where('url', '.*');
});

Route::get('/successbuy', [PaymentController::class, 'success']);*/


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/
