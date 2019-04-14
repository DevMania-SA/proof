<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role, ['admin']);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role, ['admin']);
        });

        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        Gate::define('isAuthor', function($user){
            return $user->role == 'author';
        });

        Gate::define('isEditor', function($user){
            return $user->role == 'editor';
        });

        Gate::define('isUser', function($user){
            return $user->role == 'user';
        });


        // Auth gates for: Users
        Gate::define('artist_access', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('artist_show', function ($user) {
            return in_array($user->role, ['admin']);
        });
        // Auth gates for: Users
        Gate::define('artist_create', function ($user) {
            return in_array($user->role, ['admin']);
        });
        // Auth gates for: Users
        Gate::define('artist_edit', function ($user) {
            return in_array($user->role, ['admin']);
        });
        // Auth gates for: Users
        Gate::define('artist_delete', function ($user) {
            return in_array($user->role, ['admin']);
        });

        // Auth gates for: Videos
        Gate::define('video_access', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('video_create', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('video_edit', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('video_view', function ($user) {
            return in_array($user->role, ['admin']);
        });
        Gate::define('video_delete', function ($user) {
            return in_array($user->role, ['admin']);
        });
    }
}
