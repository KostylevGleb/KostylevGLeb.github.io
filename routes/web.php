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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/about', [App\Http\Controllers\RossetiController::class, 'about'])->name('about');
Route::get('/docall', [\App\Http\Controllers\RossetiController::class, 'docallShow'])->name('docall');
Route::get('/docindustry', [\App\Http\Controllers\RossetiController::class, 'docindustryShow'])->name('docindustry');
Route::get('/doccorporate', [\App\Http\Controllers\RossetiController::class, 'doccorporateShow'])->name('doccorporate');

Route::get('/addUserShow', [App\Http\Controllers\RossetiController::class, 'addUserShow'])->name('addUserShow');
Route::post('/addUser', [App\Http\Controllers\RossetiController::class, 'addUser'])->name('addUser');


