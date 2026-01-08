<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Modules\Blog\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\Transaction>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = Transaction::class;
=======
<<<<<<< HEAD
    protected $model = Transaction::class;
=======
    protected $model = \Modules\Blog\Models\Transaction::class;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
