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
}
