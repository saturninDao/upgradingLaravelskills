<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles()  
    {  
        // Une catégorie appartient à un ou plusieurs articles. 
        return $this->belongsToMany(Article::class);  
    }  

    /*
    
    Catégories sur des articles

    $article = Article::first();  
    
    $category1 = Category::new();  
    $category1->title = ’Cuisine’;  
    
    $category2 = Category::new();  
    $category2->text = ’Nature’;  
    
    $category3 = Category::new();  
    $category3->text = ’Santé’;  
    
    $article->categories()->save($category1);  
    
    $article->categories()->saveMany([  
        $category2,  
        $category3,  
    ]);


    Association et désassociation de catégories sur des articles


    $article = Article::first();  
    
    $article->categories()->attach(2);  
    $article->categories()->attach([3, 5, 8]);  
    
    $article->categories()->detach(13);  
    $article->categories()->detach([21, 34]);
    
    */ 
}
