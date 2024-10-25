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
        $this->call([CategorySeeder::class, UserSeeder::class]);
        article::factory(50)->recycle(
            Category::all(),
            User::all()
        )->create();
     }
}
