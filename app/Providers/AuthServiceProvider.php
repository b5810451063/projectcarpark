<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('index-userManagers',function($object){
            $user = \Auth::user();
            return $user->isSuperAdmin();
        });
        Gate::define('index-parkingManager',function($user,$object){

            return $user->isSuperAdmin() || $user->level=='parking_owner';
        });
        Gate::define('index-payments',function($user,$object){
            return $user->type==$object;
        });

        Gate::define('index-parking',function($userObject){
            $user = \Auth::user();
            return $user->isOwner()  ;
        });

        Gate::define('index-log',function($userObject){
            $user = \Auth::user();
            return $user->isSuperAdmin() ;
        });
        Gate::define('index-profile',function($user,$object){

              return $user->id===$object->id || $user->level=='admin' ;
        });






    }
}
