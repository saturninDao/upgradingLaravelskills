<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Document extends Controller
{
    public function show(User $user)  
    {  
        // Tout le monde peut voir un document.  
        return true;  
    }  
  
    public function update(User $user, Document $doc)  
    {  
        // Seul le créateur a le droit de modifier  
        // un document.  
        return $user->id == $doc->user_id;  
    }  
  
    public function create(User $user)  
    {  
        // Un utilisateur valide a le droit  
        // de créer un document.  
        return $user->is_valid;  
    }  
}
