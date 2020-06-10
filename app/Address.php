<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function company()  
    {  
        // Une adresse appartient à une société  
        return $this->belongsTo(Company::class);  
    }  
}
