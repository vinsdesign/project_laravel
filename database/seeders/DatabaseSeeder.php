<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\article;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'  => 'Kylian Saputra',
            'username' => 'KylianSaputra',
            'email' => 'kyliansaputra@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)

        ]);

        article::factory(50)->recycle(
            user::factory(10)->create(),
            $admin,   
            Category::factory(5)->create(),
        )->create();
     }
}
