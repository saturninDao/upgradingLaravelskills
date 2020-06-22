<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Premiere porte :
        // Acces à l'administration
        Gate::define('show-administration',function($user){
            return $user->role =='admin';
        });

        // Seconde porte:
        // Possibilité de modifier un message
        Gate::define(
            'update-message',
            function($user,$message){
                return $message->user_id == $user->id;
            }
        );

    }
}
