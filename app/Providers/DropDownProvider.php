<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class DropDownProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer("*",function($view){
            $view->with('category_array',DB::table('category')->get());
        });
        view()->composer("*",function($view){
            $view->with('category',DB::select('SELECT * FROM category WHERE `id` NOT IN(2,3)'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
