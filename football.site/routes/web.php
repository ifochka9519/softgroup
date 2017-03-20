<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('club/{id}', 'ClubController@about')->name('aboutClub');
Route::get('stage/{id}', 'StageController@about')->name('aboutStage');
Route::get('league/{id}', 'LeagueController@about')->name('aboutLeague');
Route::get('trophy/{id}', 'TrophyController@about')->name('aboutTrophy');
Route::get('clubs/sort', 'ClubController@sort')->name('sortClubs');
Route::get('stages/sort', 'StageController@sort')->name('sortStages');
Route::get('leagues/sort', 'LeagueController@sort')->name('sortLeagues');
Route::get('trophies/sort', 'TrophyController@sort')->name('sortTrophies');
Route::get('clubs', 'ClubController@all')->name('allClubs');
Route::get('stages', 'StageController@all')->name('allStages');
Route::get('leagues', 'LeagueController@all')->name('allLeagues');
Route::get('trophies', 'TrophyController@all')->name('allTrophies');

Route::post('create_trophy', 'TrophyController@createTrophy')->name('createTrophy');
Route::get('new_trophy', 'TrophyController@newTrophy')->name('newTrophy');
Route::post('create_stage', 'StageController@createStage')->name('createStage');
Route::get('new_stage', 'StageController@newStage')->name('newStage');
Route::post('create_league', 'LeagueController@createLeague')->name('createLeague');
Route::get('new_league', 'LeagueController@newLeague')->name('newLeague');
Route::post('create_club', 'ClubController@createClub')->name('createClub');
Route::get('new_club', 'ClubController@newClub')->name('newClub');

Route::post('create_country', 'CountryController@createCountry')->name('createCountry');
Route::get('new_country', 'CountryController@newCountry')->name('newCountry');
Route::post('create_city', 'CityController@createCity')->name('createCity');
Route::get('new_city', 'CityController@newCity')->name('newCity');
Route::post('create_president', 'PresidentController@createPresident')->name('createPresident');
Route::get('new_president', 'PresidentController@newPresident')->name('newPresident');

Route::post('create_club_league', 'ClubController@createClubLeague')->name('createClubLeague');
Route::get('new_club_league', 'ClubController@newClubLeague')->name('newClubLeague');
Route::post('create_club_trophy', 'ClubController@createClubTrophy')->name('createClubTrophy');
Route::get('new_club_trophy', 'ClubController@newClubTrophy')->name('newClubTrophy');

Route::delete('clubs/{club}', 'ClubController@delete')->name('deleteClub');
Route::delete('leagues/{league}', 'LeagueController@delete')->name('deleteLeague');
Route::delete('stages/{stage}', 'StageController@delete')->name('deleteStage');
Route::delete('trophies/{trophy}', 'TrophyController@delete')->name('deleteTrophy');