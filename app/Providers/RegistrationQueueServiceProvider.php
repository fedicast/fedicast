<?php

namespace App\Providers;

use App\User;
use Cache;
use Illuminate\Support\ServiceProvider;

class RegistrationQueueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $userCount = Cache::get('user.count')) {
            $userCount = User::query()->count('id');
            Cache::forever('user.count', User::query()->count('id'));
        }

        if ($userCount > config('registration.limit', 100)) {
            config()->set('registration.open', false);
        }
    }
}
