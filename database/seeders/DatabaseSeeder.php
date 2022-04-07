<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'melasti125',
            'username' => 'melasti',
            'email' => 'melasti125@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(10)->create();
        Post::factory(5)->create();
        // Category::factory(2)->create();

        Category::create([
            'name' => 'Bag',
            'slug' => 'bag',
        ]);
        Category::create([
            'name' => 'Shoe',
            'slug' => 'shoe',
        ]);
    }
}
