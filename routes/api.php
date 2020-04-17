<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Rotte profile successivamente raggruppate e introdotto middleware
 */
Route::get('/profiles', 'ProfileController@getAllProfiles')->name('profiles.all');
Route::get('/profiles/{id}', 'ProfileController@showProfile')->name('profiles.show');
Route::get('/profiles/{id}/projects', 'ProfileController@showProjects')->name('profile.projects');
Route::get('/profiles/{id}/tecnologies', 'ProfileController@showTecnologiesByProjects')->name('profile.tecnologies');
Route::get('/profiles/{id}/tecnologies/{tid}/projects', 'ProfileController@projectList')->name('profile.tecnologies.projects');
Route::get('/profile/{id}/abilities', 'ProfileController@getAbility')->name('profile.abilities');

/**
 * Rotte tecnologies successivamente raggruppate
 */
Route::get('/tecnologies', 'TecnologyController@getTecnologies')->name('tec.all');
Route::get('/tecnologies/{id}', 'TecnologyController@showTecnology')->name('tec.show');
Route::get('/tecnologies/{id}/projects', 'TecnologyController@projectByTec')->name('tec.pjlist');

/**
 * Rotte projects successivamente raggruppate
 */
Route::get('/projects', 'ProjectController@getAllProjects')->name('project.all');
Route::get('/projects/{id}', 'ProjectController@detailProject')->name('project.detail');

/**
 * Rotte abilities successivamente raggruppate
 */
Route::get('/abilities/', 'AbilityController@getAbilities')->name('abilities.all');
Route::get('/abilities/more', 'AbilityController@moreDetails')->name('abilities.all.more');
Route::get('/abilities/{id}', 'AbilityController@detailsAbility')->name('abilities.details');
