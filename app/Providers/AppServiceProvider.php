<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Type_Phim;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        view()->composer('header',function($view){
            
            $data3=Type_Phim::all();
                $view->with('data3',$data3);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
