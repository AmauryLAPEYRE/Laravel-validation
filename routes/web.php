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

Route::get('/', 'View@home');
Route::get('/series', 'View@series');
Route::get('/actors', 'View@actors');
Route::get('/genres', 'View@genres');
Route::get('/addseries', 'View@addSeries');
Route::get('/addactor', 'View@addActor');
Route::get('/addgenre', 'View@addGenre');

Route::post('/insertserie', 'Serie@insertOne');
Route::post('/insertactor', 'Actor@insertOne');
Route::post('/insertgenre', 'Genre@insertOne');

Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/deleteactor', 'Actor@deleteOne');
Route::post('/deletegenre', 'Genre@deleteOne');

Route::post('/updateserie', 'View@updateForm');
Route::post('/updateactor', 'View@updateActor');
Route::post('/updategenre', 'View@updateGenre');
Route::post('/updateserieaction', 'Serie@UpdateOne');
Route::post('/updateactoraction', 'Actor@UpdateOne');
Route::post('/updategenreaction', 'Genre@UpdateOne');
