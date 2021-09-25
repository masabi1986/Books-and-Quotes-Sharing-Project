<?php

namespace Database\Factories;

use App\Models\Quote;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => Book::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'content' => $this->faker->paragraph()
        ];
    }
}
