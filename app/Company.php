<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function address()  
    {  
        // Une société possède une adresse  
        return $this->hasOne(Address::class);  
    }  
}
