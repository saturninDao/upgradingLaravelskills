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
}
