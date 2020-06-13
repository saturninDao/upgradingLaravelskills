<?php

use Illuminate\Support\Facades\Route;
use App\Article;
use App\Message; 

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

// Page d'accueil : liste des messages  
Route::get('/', 'ArticleController@index'); 
  
// Enregistrement d'un message  
Route::post('/', 'ArticleController@store');


Route::get('bonjour/{name}', function ($name) {
    return 'Bonjour '.$name;
});

Route::get('articles/{id}', function ($id) {  
  
    $article = Article::find($id);  
    return 'Le nom de cet article est : ' . $article->title;  
  
});

Route::get('secret-page','SecretController@index')->middleware('only-my-ip');