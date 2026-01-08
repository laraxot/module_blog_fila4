<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Category;

/**
<<<<<<< HEAD
 * @extends Factory<Category>
=======
<<<<<<< HEAD
 * @extends Factory<Category>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\Category>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Category>
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'slug' => fake()->slug,
        ];
    }
}
