<?php

namespace App\Providers;

use App\Filament\Notifications\CustomNotification;
use Filament\Notifications\Notification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Notification::configureUsing(function (Notification $notification): void {
            $notification->view('filament-notifications.notification');
        });

        $this->app->bind(Notification::class, CustomNotification::class);
    }
}
