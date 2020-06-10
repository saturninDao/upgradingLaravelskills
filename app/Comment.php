<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article()  
    {  
        // L’article qui contient un commentaire  
        return $this->belongsTo(Article::class);  
    } 

    /*
    Accéder aux commentaires d’un article


        $article = Article::find(4577);  
        
        $comments = $articles->comments;  
        
        foreach ($comments as $comment) {  
            echo $comment->title;  
            // ...  
            echo $comment->text;  
        }
        Accéder à l’article auquel se rapporte un commentaire


        $comment = Comment::first();  
        
        echo $comment->article->title;

    */
}
