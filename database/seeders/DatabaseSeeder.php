<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'test@example.com',
        ]);

        $categories = [
            'Technology',
            'Health',
            'Lifestyle',
            'Education',
            'Travel',
            'Food',
            'Finance',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory(100)->create();
    }
}
