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

// Page d’accueil : liste des messages  
Route::get(’/’, function () {  
  
    // Liste des messages du plus récent au plus ancien.  
    $messages = Message::latest()->get();  
  
    // Affichage de la vue.  
    return view(’home’, [’messages’ => $messages]);  
  
});  
  
// Enregistrement d’un message  
Route::post(’/’, function () {  
  
    // Enregistrement du message à partir d’un formulaire  
    $message = new Message;  
    $message->author_name = request(’author_name’, ’Inconnu’);  
    $message->content = request(’content’, ’-’);  
    $message->save();  
  
    // Redirection vers la page d’accueil  
    return redirect(’/’);  
  
});


Route::get('bonjour/{name}', function ($name) {
    return 'Bonjour '.$name;
});

Route::get('articles/{id}', function ($id) {  
  
    $article = Article::find($id);  
    return 'Le nom de cet article est : ' . $article->title;  
  
});