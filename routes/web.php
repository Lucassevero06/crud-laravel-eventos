<?php

use App\Http\Controllers\EventosController;
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

Route::redirect('/', '/eventos');

Route::prefix('eventos')->group(function () {
    Route::get('/', [EventosController::class, 'index'])->name('eventos-index');
    Route::get('/create', [EventosController::class, 'create'])->name('eventos-create');
});
