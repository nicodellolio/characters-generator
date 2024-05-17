<?php

use App\Http\Controllers\Guests\ItemsController;
use App\Http\Controllers\GuestsController;
use App\Models\Item;
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
    return view('home');

});

Route::get('/items', [ItemsController::class, 'index'])->name('guests.items');

Route::get('/items{character}', [ItemsController::class, 'show'])->name('guests.show');