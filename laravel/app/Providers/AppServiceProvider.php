<?php

namespace App\Providers;

use App\Category;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        #view composer =>for send variable to "Master.blade.php" from any pages
        view()->composer('Master',function ($view){
            $category=Category::all();

            $view->with(compact('category'));
        });

        view()->composer('Master',function ($view){
            $writers=User::all();
            $view->with(compact('writers'));
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
