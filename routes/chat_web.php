<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MenteeController;
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
Route::get('/mentee/register', [MenteeController::class, 'menteeRegister'])->name('mentee.register');

Route::middleware('auth')->group(function (){
    Route::get('/messenger',  [ChatController::class, 'platform'])->name('chat');
    Route::get('/platform',   [ChatController::class, 'platform'])->name('platform');
});



