<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\world\LandController;
use App\Http\Controllers\world\WorldController;
use App\Http\Controllers\ideas\IdeasController;
use App\Http\Controllers\religion\ReligionController;
use App\Http\Controllers\characters\CharactersController;

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


// the lands / mystical places
Route::get('land/getLands', [LandController::class, 'getLands'])->name('getLands');
Route::get('land/showLand/{id}', [LandController::class, 'showLand'])->name('showLand');
Route::get('land/getAllLands', [LandController::class, 'getAllLands'])->name('getAllLands');
Route::get('land/getAllMysticalPlaces', [LandController::class, 'getAllMysticalPlaces'])->name('getAllMysticalPlaces');
Route::get('land/getMysticalPlace/{id}', [LandController::class, 'getMysticalPlace'])->name('getMysticalPlace');
Route::post('land/registerMysticalPlace', [LandController::class, 'registerMysticalPlace'])->name('registerMysticalPlace');
Route::post('land/registerMysticalPlaceImage', [LandController::class, 'registerMysticalPlaceImage'])->name('registerMysticalPlaceImage');
Route::get('land/getMysticalPlaceAllImages/{id}', [LandController::class, 'getMysticalPlaceAllImages'])->name('getMysticalPlaceAllImages');
Route::get('land/getMysticalPlaceImage/{fileName}', [LandController::class, 'getMysticalPlaceImage'])->name('getMysticalPlaceImage');

// characters
Route::get('characters/getCharacters', [CharactersController::class, 'getCharacters'])->name('getCharacters');
Route::get('characters/showCharacter/{id}', [CharactersController::class, 'showCharacter'])->name('showCharacter');
Route::post('characters/registerCharacter', [CharactersController::class, 'registerCharacter'])->name('registerCharacter');
Route::post('characters/registerCharacterImage', [CharactersController::class, 'registerCharacterImage'])->name('registerCharacterImage');
Route::get('characters/getCharacterImage/{fileName}', [CharactersController::class, 'getCharacterImage'])->name('getCharacterImage');
Route::get('characters/getProtagonist', [CharactersController::class, 'getProtagonist'])->name('getProtagonist');
Route::get('characters/getAllCharacters', [CharactersController::class, 'getAllCharacters'])->name('getAllCharacters');


// religion
Route::get('religion/getReligion', [ReligionController::class, 'getReligion'])->name('getReligion');
Route::get('religion/getJudge/{id_order}', [ReligionController::class, 'getJudge'])->name('getJudge');
Route::get('religion/getAllJudges', [ReligionController::class, 'getAllJudges'])->name('getAllJudges');
Route::get('religion/getDeity/{id_order}', [ReligionController::class, 'getDeity'])->name('getDeity');
Route::get('religion/getOrders', [ReligionController::class, 'getOrders'])->name('getOrders');

// world
Route::get('world/getMagicSystem', [WorldController::class, 'getMagicSystem'])->name('getMagicSystem');
Route::get('world/getRaces', [WorldController::class, 'getRaces'])->name('getRaces');
Route::get('world/getBooks', [WorldController::class, 'getBooks'])->name('getBooks');
Route::get('world/getChaptersByCharacter/{book_id}/{character_id}', [WorldController::class, 'getChaptersByCharacter'])->name('getChaptersByCharacter');
Route::post('world/registerChapter', [WorldController::class, 'registerChapter'])->name('registerChapter');
Route::get('world/getChapters/{chapter_id}', [WorldController::class, 'getChapters'])->name('getChapters');
Route::post('world/registerChapterContent', [WorldController::class, 'registerChapterContent'])->name('registerChapterContent');
Route::get('world/getStoryByChapter/{chapter_id}', [WorldController::class, 'getStoryByChapter'])->name('getStoryByChapter');


// IDEAS
Route::get('ideas/getThemes', [IdeasController::class, 'getThemes'])->name('getThemes');
Route::get('ideas/getAllIdeas', [IdeasController::class, 'getAllIdeas'])->name('getAllIdeas');
Route::get('ideas/getIdeas/{theme_id}', [IdeasController::class, 'getIdeas'])->name('getIdeas');
Route::get('ideas/pdfIdeas/{theme_id}', [IdeasController::class, 'pdfIdeas'])->name('pdfIdeas');
Route::post('ideas/createIdea', [IdeasController::class, 'createIdea'])->name('createIdea');



//CREATURES
Route::get('creatures/getAllCreatures', [WorldController::class, 'getAllCreatures'])->name('getAllCreatures');
Route::get('creatures/getCreature/{creature_id}', [WorldController::class, 'getCreature'])->name('getCreature');
Route::post('creatures/createCreature', [WorldController::class, 'createCreature'])->name('createIdea');
Route::get('creatures/getCreatureImage/{fileName}', [WorldController::class, 'getCreatureImage'])->name('getCreatureImage');
Route::post('creatures/registerCreatureImage', [WorldController::class, 'registerCreatureImage'])->name('registerCreatureImage');
Route::get('creatures/getCreatureImageAll/{creature_id}', [WorldController::class, 'getCreatureImageAll'])->name('getCreatureImageAll');
