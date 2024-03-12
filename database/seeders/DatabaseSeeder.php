<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'creator',
            'email' => 'creator@localhost',
            'password' => Hash::make('password'),
            'role' => 'creator'
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@localhost',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
        
        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
            CommentSeeder::class,
            SavedPostSeeder::class,
            LogSeeder::class,
            InformationSeeder::class,
        ]);
    }
}
