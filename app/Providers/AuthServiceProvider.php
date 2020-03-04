<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers;
use App\University;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    //protected $policies = [
    //'App\Model' => 'App\Policies\ModelPolicy',
    //];
    protected $policies = [
        University::class => UniversityPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerUniversityPolicies();

        //
    }

    public function registerUniversityPolicies(){

        Gate::define('create-University', function($user){
         return  $user->hasAccess(['create-University']);
        });
        
        Gate::define('update-University', function ($user, \App\University $university){
            return $user->hasAccess(['update-University']) ;
        });
        Gate::define('create-Company',function($user,\App\Company $company){
             return $user->hasAccess(['create-Company']);
        });
        Gate::define('update-Company',function($user){
            return $user->hasAccess(['Update-Company']);

            });
       }
    }

