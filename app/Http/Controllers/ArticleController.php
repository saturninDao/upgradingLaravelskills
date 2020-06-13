<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ArticleController extends Controller
{

        public function store(){
            // Liste des messages du plus récent au plus ancien.  
            $messages = Message::latest()->get();  
        
            // Affichage de la vue.  
            return view('home', ['messages' => $messages]);
        } 
}
