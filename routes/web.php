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
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    
    Route::delete('/huisdieren/{id}', [App\Http\Controllers\HuisdierController::class, 'destroy']);

    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update']);
});

Route::middleware(['auth', 'gast'])->group(function(){
    Route::get('/account', [App\Http\Controllers\AccountController::class, 'show']);

    Route::get('huisdieren/create', [App\Http\Controllers\HuisdierController::class, 'create']);
    Route::post('/huisdieren', [App\Http\Controllers\HuisdierController::class, 'store']);

    Route::get('/huisdieren/{id}/orders/create', [App\Http\Controllers\OrderController::class, 'create']);
    Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store']);
    Route::delete('/orders/{id}', [App\Http\Controllers\OrderController::class, 'destroy']);

    Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index']);
    Route::get('/reviews/create', [App\Http\Controllers\ReviewController::class, 'create']);
    Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store']);

    Route::get('/profielen/{id}', [App\Http\Controllers\ProfielController::class, 'show']);
    Route::get('/profielen', [App\Http\Controllers\ProfielController::class, 'index']);

    Route::get('/error', [App\Http\Controllers\ErrorController::class, 'show']);
});


Route::get('/', [App\Http\Controllers\HuisdierController::class, 'index']);
Route::get('/huisdieren', [App\Http\Controllers\HuisdierController::class, 'index']);

Route::get('/huisdieren/{id}', [App\Http\Controllers\HuisdierController::class, 'show']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

