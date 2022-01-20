<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $_post = new Post();
            $_post->text = $faker->text();
            $_post->author = $faker->name();
            $_post->date_post = $faker->date();
            $_post->save();
        }
    }
}
