<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Modules\Blog\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
