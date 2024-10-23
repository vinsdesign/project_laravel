<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(),
            'slug'=> Str::slug(fake()->sentence()),
            'category'=> fake()->word(),
            'date'=> fake()->date(),
            'description'=> fake()->paragraph(2),
            'role'=>fake()->sentence(2),
            'image'=> fake()->imageUrl(360, 360, 'animals',true),
            'author_id'=> User::factory(),
            'category_id'=> Category::factory()

        ];
    }
}
