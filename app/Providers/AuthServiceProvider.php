<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // User Gate
        Gate::define('user-view', function () {
            return Auth::user()->role->restrictions['user_management']['section']['users']['user_view']['status'] == true;
        });
        Gate::define('user-create', function () {
            return Auth::user()->role->restrictions['user_management']['section']['users']['user_create']['status'] == true;
        });
        Gate::define('user-edit', function () {
            return Auth::user()->role->restrictions['user_management']['section']['users']['user_edit']['status'] == true;
        });
        // // Role Gate
        Gate::define('role-view', function () {
            return Auth::user()->role->restrictions['user_management']['section']['roles']['role_view']['status'] == true;
        });
        Gate::define('role-create', function () {
            return Auth::user()->role->restrictions['user_management']['section']['roles']['role_create']['status'] == true;
        });
        Gate::define('role-edit', function () {
            return Auth::user()->role->restrictions['user_management']['section']['roles']['role_edit']['status'] == true;
        });
        // // Department Gate
        Gate::define('department-view', function () {
            return Auth::user()->role->restrictions['user_management']['section']['departments']['department_view']['status'] == true;
        });
        Gate::define('department-create', function () {
            return Auth::user()->role->restrictions['user_management']['section']['departments']['department_create']['status'] == true;
        });
        Gate::define('department-edit', function () {
            return Auth::user()->role->restrictions['user_management']['section']['departments']['department_edit']['status'] == true;
        });

    }
}
