<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\User;
use App\Models\Cita;
use App\Policies\TeamPolicy;
use App\Policies\CitaPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Cita::class => CitaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('editar-cita', function(User $user, Cita $cita){
            return $user->id === $cita->user_id;
        });

        //
    }
}
