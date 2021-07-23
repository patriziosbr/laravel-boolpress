<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // il seeder ha funzionato anche senza bho
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i=0; $i<5; $i++) {

            $newPost = new Post();
            
            $newPost->title = $faker->sentence(3, true);
            $newPost->author = $faker->name();
            $newPost->slug = Str::slug($newPost->title. " " .$newPost->author, '-');
            $newPost->content = $faker->paragraph();
            $newPost->post_date = $faker->dateTime();
            $newPost->save();

        }
    }
}
