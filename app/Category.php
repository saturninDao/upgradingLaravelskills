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
}
