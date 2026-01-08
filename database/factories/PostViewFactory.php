<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\PostView;

/**
<<<<<<< HEAD
 * @extends Factory<PostView>
=======
<<<<<<< HEAD
 * @extends Factory<PostView>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\PostView>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class PostViewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<PostView>
     */
    protected $model = PostView::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ip_address' => fake()->word,
            // 'user_agent' => $this->faker->useragent,
            'post_id' => fake()->randomNumber(5),
            'user_id' => fake()->randomNumber(5),
        ];
    }
}
