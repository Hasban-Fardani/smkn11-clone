<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        //
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('user', function ($user) {
            return $user->role === 'user';
        });

        Gate::define('creator', function ($user) {
            return $user->role === 'creator';
        });

        Gate::define('create-post', function ($user) {
            return $user->role === 'creator' || $user->role === 'admin';
        });

        Gate::define('update-post', function ($user, $post) {
            return $user->id === $post->user_id || $user->role === 'admin';
        });
    }
}
