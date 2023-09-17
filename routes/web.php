<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('pages/front/home');
});

Route::get('/home', function () {
    return view('pages/front/home');
})->name('home');

Route::get('/clubs', function () {
    return view('pages/front/clubs');
})->name('clubs');

Route::get('/shop', function () {
    return view('pages/front/shop');
})->name('shop');

Route::get('/tokens', function () {
    return view('pages/front/tokens');
})->name('tokens');

Route::get('/home', function () {
    return view('pages/front/home');
})->name('home');

Route::get('/news', function () {
    return view('pages/front/news');
})->name('news');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/games', function () {
    return view('/pages/back/games');
})
    ->middleware(['auth', 'verified'])
    ->name('games');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
});

require __DIR__ . '/auth.php';

//Auth::routes();