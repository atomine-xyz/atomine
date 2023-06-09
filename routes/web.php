<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('mainpage');
});

Route::get('/maps', function () {
    return view('map-frame');
});

Route::get("/discord", function () {
    return redirect()->away('https://discord.gg/yvhzsk7ZJa');
});

Route::get("/launcher/get", function () {
    if (Storage::exists("public/launcher.exe")) {
        return Storage::download("public/launcher.exe", "launcher.exe");
    }
});

Route::get("/launcher/get-jar", function () {
    if (Storage::exists("public/launcher.jar")) {
        return Storage::download("public/launcher.jar", "launcher.jar");
    }
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
