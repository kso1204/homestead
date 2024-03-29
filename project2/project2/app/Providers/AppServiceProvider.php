<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('*', function($view){
            
            $allTags = \Cache::rememberForever('tags', function(){
                    return \App\Tag::all();
            });

            $view->with(compact('allTags'));
            $view->with('currentUser', auth()->user());
        });

    }
}
