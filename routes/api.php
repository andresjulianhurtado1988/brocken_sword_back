<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\world\LandController;
use App\Http\Controllers\characters\CharactersController;
use App\Http\Controllers\religion\ReligionController;
use App\Http\Controllers\world\WorldController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// the lands
Route::get('world/getLands', [LandController::class, 'getLands'])->name('getLands');
Route::get('world/showLand/{id}', [LandController::class, 'showLand'])->name('showLand');

// characters
Route::get('characters/getCharacters', [CharactersController::class, 'getCharacters'])->name('getCharacters');
Route::get('characters/showCharacter/{id}', [CharactersController::class, 'showCharacter'])->name('showCharacter');
Route::post('characters/registerCharacter', [CharactersController::class, 'registerCharacter'])->name('registerCharacter');


// religion
Route::get('religion/getReligion', [ReligionController::class, 'getReligion'])->name('getReligion');
Route::get('religion/getJudge/{id_order}', [ReligionController::class, 'getJudge'])->name('getJudge');
Route::get('religion/getDeity/{id_order}', [ReligionController::class, 'getDeity'])->name('getDeity');

Route::get('world/getMagicSystem', [WorldController::class, 'getMagicSystem'])->name('getMagicSystem');
Route::get('world/getRaces', [WorldController::class, 'getRaces'])->name('getRaces');