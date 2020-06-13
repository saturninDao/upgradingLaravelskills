<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ArticleController extends Controller
{

    public function index(){
        // Liste des messages du plus récent au plus ancien.  
        $messages = Message::latest()->get();  
        // Affichage de la vue.  
        return view('home', ['messages' => $messages]);
    }

    public function store(){

        $data = request()->validate([
            'author_name' => 'required|max:100',
            'content' => 'required'
        ]);
        // Enregistrement du message à partir d'un formulaire  
        
        $message = new Message;  
        // $message->author_name = request('author_name', 'Inconnu');  
        $message->author_name = $data['author_name']; 
        // $message->content = request('content', '-');  
        $message->content =  $data['content'];  
        $message->save(); 
    
       // dd($data);exit;
        
        // Redirection vers la page d'accueil  
        return redirect('/'); 
    }
}
