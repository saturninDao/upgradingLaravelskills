<?php

use Illuminate\Support\Facades\Route;
use App\Article;

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


Route::get('bonjour/{name}', function ($name) {
    return 'Bonjour '.$name;
});

Route::get('articles/{id}', function ($id) {  
  
    $article = Article::find($id);  
    return 'Le nom de cet article est : ' . $article->title;  
  
});