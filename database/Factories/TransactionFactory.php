<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

<<<<<<< HEAD
use Modules\Blog\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
=======
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\Transaction>
>>>>>>> origin/develop
 */
class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = Transaction::class;
=======
    protected $model = \Modules\Blog\Models\Transaction::class;
>>>>>>> origin/develop

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
