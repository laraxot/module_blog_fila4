<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\Profile;

/**
<<<<<<< HEAD
 * @extends Factory<Profile>
=======
<<<<<<< HEAD
 * @extends Factory<Profile>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\Profile>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Profile>
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(5, false),
            'user_id' => fake()->randomNumber(5, false),
        ];
    }
}
