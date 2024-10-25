<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Web Programming',
            'slug'=> 'category-web-programming'
        ]);
        Category::create([
            'name'=>'Backend',
            'slug'=> 'category-backend'
        ]);
        Category::create([
            'name'=>'Laravel 11',
            'slug'=> 'category-laravel-11'
        ]);
        
    }
}
