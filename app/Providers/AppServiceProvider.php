<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        // Verifify connection to database
        try {
            if(User::count() > 0){
                auth()->loginUsingId(1);
            }else{
                $user = User::factory()->create();
                auth()->login($user);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
