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
/*
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
    
*/

    public function create(User $user)  
    {  
        // Un rédacteur à le droit  
        // de créer un document.  
        return $user->role == ’writer’;  
    }  

    public function delete(User $user)  
    {  
        // Un modérateur peut  
        // supprimer un document  
        return $user->role == ’moderator’;  
    }  

    public function showAll(User $user)  
    {  
        // Un administrateur peut  
        // afficher tous les documents  
        return $user->role == ’admin’;  
    }  

    public function before(User $user)  
    {  
        // La méthode before permet d’effectuer  
        // une vérification avant de passer à la  
        // suite. Par exemple dans ce cas, si  
        // l’utilisateur est admin, il est inutile  
        // de faire d’autres vérifications. Il a  
        // tous les droits  
        return $user->role == ’admin’ ?: null;  
    }  
}
