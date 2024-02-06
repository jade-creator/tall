<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->has(Post::factory()->count(10))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
    }
}
