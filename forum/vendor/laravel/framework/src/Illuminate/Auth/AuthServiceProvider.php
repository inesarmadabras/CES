<?php

namespace Illuminate\Auth;

use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{



    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAuthenticator();

        $this->registerUserResolver();

        $this->registerAccessGate();

        $this->registerRequestRebindHandler();
    }

    /**
     * Register the authenticator services.
     *
     * @return void
     */
    protected function registerAuthenticator()
    {
        $this->app->singleton('auth', function ($app) {
            // Once the authentication service has actually been requested by the developer
            // we will set a variable in the application indicating such. This helps us
            // know that we need to set any queued cookies in the after event later.
            $app['auth.loaded'] = true;

            return new AuthManager($app);
        });

        $this->app->singleton('auth.driver', function ($app) {
            return $app['auth']->driver();
        });
    }

    /**
     * Register a resolver for the authenticated user.
     *
     * @return void
     */
    protected function registerUserResolver()
    {
        $this->app->bind('Illuminate\Contracts\Auth\Authenticatable', function ($app) {
            return $app['auth']->user();
        });
    }

    /**
     * Register the access gate service.
     *
     * @return void
     */
    protected function registerAccessGate()
    {
        $this->app->singleton(GateContract::class, function ($app) {
            return new Gate($app, function () use ($app) { return $app['auth']->user(); });
        });
    }

    /**
     * Register a resolver for the authenticated user.
     *
     * @return void
     */
    protected function registerRequestRebindHandler()
    {
        $this->app->rebinding('request', function ($app, $request) {
            $request->setUserResolver(function () use ($app) {
                return $app['auth']->user();
            });
        });
    }

    //NEW
    public function boot(GateContract $gate)
{
    parent::registerPolicies($gate);

    $gate->define('update-post', function ($user, $post, $isModerator) {
        if ($user->id === $post->subreddit->user->id) {
            return true;
        }

        if ($user->id === $post->user_id) {
            return true;
        }

        if ($isModerator) {
            return true;
        }

        return false;
    });

    $gate->define('update-sub', function($user, $subreddit) {
        if($user->id === $subreddit->user->id) {
            return true;
        }

        return false;
    });

    $gate->define('update-comment', function($user, $comment, $isModerator) {
        if($user->id === $comment->user_id) {
            return true;
        }

        if ($isModerator) {
            return true;
        }
    });
}  //END

}
