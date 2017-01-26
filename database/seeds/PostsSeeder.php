<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostLocation;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for($i = 1; $i <= 50; $i++){
        Post::create([
            'title' => $faker->text,
            'description' => $faker->text,
            'image' => $faker->imageUrl
        ]);

        PostLocation::create([
            'post_id' => $i,
            'longitude' => $faker->longitude,
            'latitude' => $faker->latitude,
            'title' => $faker->text
        ]);
      }
    }
  }
