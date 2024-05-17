<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Guests\CharactersController;
use App\Models\Characters;
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

Route::get('/characters', [CharactersController::class, 'index'])->name('guests.characters.index');

Route::get('/characters{character}', [CharactersController::class, 'show'])->name('guests.characters.show');

Route::resource('character', CharacterController::class);