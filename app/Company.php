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
    
    /*
        $my_company = Company::where(’name’, ’Narval’)->first();  
  
        $my_company_address = $my_company->address;  
  
        // Ensuite, on peut manipuler l’adresse  
        $city = $my_company_address->city;  
        $my_company_address->country = ’France’;  
        $my_company_address->save();
    */
}
