<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
// Bind route parameters.
Route::model('tournament', 'Tournament');
Route::model('season', 'Season');
Route::model('team', 'Team');



Route::get('/',function() {
   return View::make('index');
});


Route::get('/tournaments', array('as' => 'tournaments', 'uses' => 'TournamentController@index'));

Route::get('/tournaments/create', array('as' => 'create new tournament', 'uses' => 'TournamentController@create'));

Route::get('/seasons', array('as' => 'seasons', 'uses' => 'SeasonController@index'));

Route::get('/seasons/start', array('as' => 'start new season', 'uses' => 'SeasonController@create'));

Route::get('/teams', array('as' => 'teams', 'uses' => 'TeamController@index'));

