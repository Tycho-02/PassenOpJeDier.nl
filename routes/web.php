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

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::post('/admin/{id}/block', [\App\Http\Controllers\AdminController::class, 'block']);
    Route::post('/admin/{id}/unblock', [\App\Http\Controllers\AdminController::class, 'unblock']);
});

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
