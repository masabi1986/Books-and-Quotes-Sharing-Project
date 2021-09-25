<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $this->faker->name(),
            'author' => $this->faker->name(),
            'publisher' => $this->faker->company(),
            'isbn' => $this->faker->randomDigit(13),
            'coverImagePath' => $this->faker->name(),
            'translater' => $this->faker->name(),
        ];
    }
}