<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\OpenVolunteer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer(['user.layouts.app'], function ($view) {
            $contact = ContactUs::first();
            $view->with([
                'contact' => $contact,
            ]);
        });
    }
}
