<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Salim Maula',
        //     'email' => 'salimmaula@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'Hafiz',
        //     'email' => 'hafiz@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis deserunt ipsam sint consectetur aperiam delectus cupiditate dolorum
        //     odit quis tenetur officiis labore aliquid quas, rerum blanditiis rem velit ipsa
        //     repellendus enim, cum aliquam? Nostrum voluptas dicta facilis ipsa, similique
        //     perferendis labore iure voluptatum, veniam dignissimos sed rem laborum officiis
        //     sunt ratione praesentium inventore blanditiis eius unde vel tenetur at?
        //     Praesentium quibusdam maxime saepe et aperiam quae odit expedita nemo enim
        //     vitae? Accusamus, eum eveniet omnis sequi quas dicta ad, esse enim, placeat quia
        //     facilis maxime rerum aut? Molestiae ipsam consequatur eligendi, totam rem ipsum
        //     laboriosam sapiente aliquam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis deserunt ipsam sint consectetur aperiam delectus cupiditate dolorum
        //     odit quis tenetur officiis labore aliquid quas, rerum blanditiis rem velit ipsa
        //     repellendus enim, cum aliquam? Nostrum voluptas dicta facilis ipsa, similique
        //     perferendis labore iure voluptatum, veniam dignissimos sed rem laborum officiis
        //     sunt ratione praesentium inventore blanditiis eius unde vel tenetur at?
        //     Praesentium quibusdam maxime saepe et aperiam quae odit expedita nemo enim
        //     vitae? Accusamus, eum eveniet omnis sequi quas dicta ad, esse enim, placeat quia
        //     facilis maxime rerum aut? Molestiae ipsam consequatur eligendi, totam rem ipsum
        //     laboriosam sapiente aliquam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis deserunt ipsam sint consectetur aperiam delectus cupiditate dolorum
        //     odit quis tenetur officiis labore aliquid quas, rerum blanditiis rem velit ipsa
        //     repellendus enim, cum aliquam? Nostrum voluptas dicta facilis ipsa, similique
        //     perferendis labore iure voluptatum, veniam dignissimos sed rem laborum officiis
        //     sunt ratione praesentium inventore blanditiis eius unde vel tenetur at?
        //     Praesentium quibusdam maxime saepe et aperiam quae odit expedita nemo enim
        //     vitae? Accusamus, eum eveniet omnis sequi quas dicta ad, esse enim, placeat quia
        //     facilis maxime rerum aut? Molestiae ipsam consequatur eligendi, totam rem ipsum
        //     laboriosam sapiente aliquam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quia vitae
        //     reiciendis deserunt ipsam sint consectetur aperiam delectus cupiditate dolorum
        //     odit quis tenetur officiis labore aliquid quas, rerum blanditiis rem velit ipsa
        //     repellendus enim, cum aliquam? Nostrum voluptas dicta facilis ipsa, similique
        //     perferendis labore iure voluptatum, veniam dignissimos sed rem laborum officiis
        //     sunt ratione praesentium inventore blanditiis eius unde vel tenetur at?
        //     Praesentium quibusdam maxime saepe et aperiam quae odit expedita nemo enim
        //     vitae? Accusamus, eum eveniet omnis sequi quas dicta ad, esse enim, placeat quia
        //     facilis maxime rerum aut? Molestiae ipsam consequatur eligendi, totam rem ipsum
        //     laboriosam sapiente aliquam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
