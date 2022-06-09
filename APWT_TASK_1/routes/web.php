<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;

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

Route::get('/', [webController::class, "index"])->name('i');
Route::get('/service', [webController::class, "product"])->name('s');

Route::get('/teams', [webController::class, "teams"])->name('t');

Route::get('/about', [webController::class, "about"])->name('a');
Route::get('/contact', [webController::class, "contact"])->name('c');
