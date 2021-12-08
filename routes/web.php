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
    return view('body');
});
Route::get('/quizz/?JV', 'QuestionController@ShowQuizz')->name('Quizz');
Route::get('/quizz', 'QuestionController@ShowQuizz')->name('Quizz');

Route::get('/question', function () {
    return view('question');
});

Route::post('/create', 'QuestionController@CreateQuestion')->name('Quizz');
Route::post('/reponse', 'QuestionController@VerifQuizz')->name('Quizz');
