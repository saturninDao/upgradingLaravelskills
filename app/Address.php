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

    /*
        $address = Address::first();  
        $company_name = $address->company->name;

        Insérer une relation en base de données

        $company = new Company;  
        $company->name = ’Narval’;  
        $company->save();  
        
        $address = new Address;  
        $address->city = ’Nantes’;  
        $address->country = ’France’;  
        
        $company->address()->save($address);

        Mettre à jour une relation
        $company = Company::find(12);  
        
        $address = new Address;  
        $address->city = ’Nantes’;  
        $address->country = ’France’;  
        
        $company->address()->save($address);

    */
}
