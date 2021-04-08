<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'blocked', 'admin'])->group(function() {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::post('/admin/{id}/block', [\App\Http\Controllers\AdminController::class, 'block']);
    Route::post('/admin/{id}/unblock', [\App\Http\Controllers\AdminController::class, 'unblock']);
});

Route::middleware(['auth', 'blocked'])->group(function() {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

Route::get('/', function () {return view('welcome');});
Route::get('/blocked', function () {return view('blocked');});



require __DIR__.'/auth.php';
