<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Document
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

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
