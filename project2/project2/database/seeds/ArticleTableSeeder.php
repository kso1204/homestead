<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        $users = App\User::all();
        /*
        $users->each(function ($user){
            $user->articles()->save(
                factory(App\Article::class)->make()
            );
        });*/
        
        $users->each(function ($user){
            $user->articles()->createMany(
                factory(App\Article::class,3)->make()->toArray()
            );
        });
    }
}
