<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
      //  University::class => UniversityPolicy::class,
      'App\Model'=>'App\Policies\Modelpolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        //$this->registerUniversityPolicies();
        $gate->define('isAdmin',function($user){
            return $user->role == 'Admin';
        });
        $gate->define('isStudent',function($user){
            return $user->role == 'Student';
        });
        $gate->define('isAdvisor',function($user){
            return $user->role == 'Advisor';
        });
        $gate->define('isUni_coordinator',function($user){
            return $user->role == 'Univ_coordinator';
        });
        $gate->define('isComp_coordinator',function($user){
            return $user->role == 'Comp_coordinator';
        });
        $gate->define('isSupervisor',function($user){
            return $user->role == 'Supervisor';
        });
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

       //test cases
       
    }

