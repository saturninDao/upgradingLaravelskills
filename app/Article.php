<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function comments()  
    {  
        // Les commentaires sur un article  
        return $this->hasMany(Comment::class);  

    }

    public function categories()  
    {  
        // Un article appartient à une ou plusieurs catégories. 
        return $this->belongsToMany(Category::class);  

        /*

            $article = Article::first();  
            
            $comments = $article->comments()  
                ->where(’text’, ’LIKE’, ’Hello%’)  
                ->get();
            Pour enregistrer un commentaire pour un article, deux méthodes sont disponibles : save et saveMany.

            Enregistrement de commentaires


            $article = Article::first();  
            
            $comment1 = Comment::new();  
            $comment1->text = ’Parfait’;  
            
            $article->comments()->save($comment1);  
            
            $comment2 = Comment::new();  
            $comment2->text = ’Moyen’;  
            
            $comment3 = Comment::new();  
            $comment3->text = ’Mauvais’;  
            
            $article->comments()->saveMany([  
                $comment2,  
                $comment3,  
            ]);

        */
    } 
}
