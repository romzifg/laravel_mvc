<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        User::factory(3)->create();
        Post::factory(20)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
    
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // User::create([
        //     'name' => 'Romzi Farhan',
        //     'email' => 'romzifarhan@email',
        //     'password' => bcrypt('qwerty123'),
        // ]);

        // User::create([
        //     'name' => 'Ghozi',
        //     'email' => 'ghozi@email',
        //     'password' => bcrypt('qwerty123'),
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam. Neque dolore ducimus repellat aut voluptatibus qui, eveniet deserunt recusandae sequi asperiores doloribus. Quos libero itaque qui nulla laudantium maxime? Magnam, voluptate! Perspiciatis eligendi magnam aut hic voluptatem laborum ipsam velit atque, quibusdam officiis minus asperiores saepe ipsum repellendus cupiditate fuga officia culpa tenetur totam excepturi. Aperiam velit reprehenderit eius, sequi esse itaque aspernatur temporibus commodi! Sequi ullam accusantium facilis rem culpa porro?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam. Neque dolore ducimus repellat aut voluptatibus qui, eveniet deserunt recusandae sequi asperiores doloribus. Quos libero itaque qui nulla laudantium maxime? Magnam, voluptate! Perspiciatis eligendi magnam aut hic voluptatem laborum ipsam velit atque, quibusdam officiis minus asperiores saepe ipsum repellendus cupiditate fuga officia culpa tenetur totam excepturi. Aperiam velit reprehenderit eius, sequi esse itaque aspernatur temporibus commodi! Sequi ullam accusantium facilis rem culpa porro?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam. Neque dolore ducimus repellat aut voluptatibus qui, eveniet deserunt recusandae sequi asperiores doloribus. Quos libero itaque qui nulla laudantium maxime? Magnam, voluptate! Perspiciatis eligendi magnam aut hic voluptatem laborum ipsam velit atque, quibusdam officiis minus asperiores saepe ipsum repellendus cupiditate fuga officia culpa tenetur totam excepturi. Aperiam velit reprehenderit eius, sequi esse itaque aspernatur temporibus commodi! Sequi ullam accusantium facilis rem culpa porro?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint accusamus deserunt minima officiis fugit suscipit atque dolores, culpa ea quidem accusantium aperiam sunt esse impedit iusto vel, nemo beatae? Eligendi itaque modi dolor deleniti, quidem aperiam. Neque dolore ducimus repellat aut voluptatibus qui, eveniet deserunt recusandae sequi asperiores doloribus. Quos libero itaque qui nulla laudantium maxime? Magnam, voluptate! Perspiciatis eligendi magnam aut hic voluptatem laborum ipsam velit atque, quibusdam officiis minus asperiores saepe ipsum repellendus cupiditate fuga officia culpa tenetur totam excepturi. Aperiam velit reprehenderit eius, sequi esse itaque aspernatur temporibus commodi! Sequi ullam accusantium facilis rem culpa porro?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

