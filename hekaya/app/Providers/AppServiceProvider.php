<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;
use ReCaptcha\ReCaptcha;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
 Validator::extend('recaptcha', function($attribute, $value) {
            $captcha = new ReCaptcha(env('CAPTCHA_SECRET_KEY'));
           $response = $captcha->verify($value, $_SERVER['REMOTE_ADDR']);
 
        return $response->isSuccess();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
 
    
}
