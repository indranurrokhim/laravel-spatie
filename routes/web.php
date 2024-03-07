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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/user', function () {
//     return view('user');
//})->middleware(['auth', 'verified','role:manager',]);

Route::get('/user', function () {
    return view('user');
})->middleware(['auth', 'verified','role_or_permission:manager|create user',]);

Route::get('/role', function () {
    return view('role');
})->middleware(['auth', 'verified','role:manager']);

Route::get('/so', function () {
    return view('so');
})->middleware(['auth', 'verified','role:manager|staff']);
