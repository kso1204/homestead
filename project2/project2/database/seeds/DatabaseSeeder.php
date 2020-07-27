<?php


use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
            
        //App\Tag::truncate();
        //DB::table('article_tags')->truncate();
        $tags = config('project.tags');
            
        $tags=  [
            'laravel' => '라라벨',
            'lumen' => '루멘',
            'general' => '자유의견',
            'server' => '서버',
            'tip' => '팁',
        ];
        
        foreach($tags as $slug => $name){
            App\Tag::create([
                'name' => $name,
                'slug' => str_slug($slug)
            ]);
        }

        $this->command->info('Seeded: tags table');

        $faker = app(Faker\Generator::class);
        $users = App\User::all();
        $articles = App\Article::all();
        $tags = App\Tag::all();

        foreach($articles as $article){
            $article->tags()->sync(
                $faker->randomElements(
                    $tags->pluck('id')->toArray(), rand(1, 3)
                )
            );
        }
        $this->command->info('Seeded: article_tag table');

        
    }
}
