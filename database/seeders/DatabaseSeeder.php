<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'title' => 'First DB post',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sit placeat.',
            'slug' => 'First_post_slug'
        ]);

        Post::create([
            'title' => 'Second DB post',
            'body' => 'Number 2 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sit placeat.',
            'slug' => 'Second_post_slug'
        ]);
    }
}