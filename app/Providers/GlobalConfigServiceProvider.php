<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\GeneralConfig;

class GlobalConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $locale = LaravelLocalization::getCurrentLocale();
            $CONFIG = \App\Models\GeneralConfig::where(["lang" => $locale])->first();
            if ($CONFIG == NULL) {
                $CONFIG = \App\Models\GeneralConfig::all()->first();
                if ($CONFIG == NULL) {
                    $CONFIG = "EMPTY";
                }
            }
            $view->with('CONFIG', $CONFIG);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
