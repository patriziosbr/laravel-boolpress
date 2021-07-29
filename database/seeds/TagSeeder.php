<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Str; //aggiunta dopo seeder funziona uguale
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [ 'PHP', 'Laravel', 'html', 'CSS', 'Javascript', 'Vue.js' ];

        foreach ($tags as $tag) {

            $newTag = new Tag();

            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');

            $newTag->save();
        }
    }
}
