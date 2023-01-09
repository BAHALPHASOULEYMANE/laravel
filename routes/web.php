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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projetajout',[App\Http\Controllers\ProjetController::class,'add'] );
Route::get('/projetlist',[App\Http\Controllers\ProjetController::class,'getAll'] );
Route::get('/projetedit{id}',[App\Http\Controllers\ProjetController::class,'edit'] );

Route::post('/projetupdate',[App\Http\Controllers\ProjetController::class,'update'] );
Route::post('/projetpersist',[App\Http\Controllers\ProjetController::class,'persist'] );


Route::get('/phraseajout',[App\Http\Controllers\PhraseController::class,'add'] );
Route::get('/phraselist',[App\Http\Controllers\PhraseController::class,'getAll'] );
Route::post('/phraseupdate',[App\Http\Controllers\PhraseController::class,'update'] );
//Route::post('/ppersist',[App\Http\Controllers\PhraseController::class,'persist'] );
