<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'isbn' => $this->faker->unique()->randomNumber(8),
            'author_id' => $this->faker->randomNumber(2),
            'pages' =>  $this->faker->unique()->randomNumber(3),
        ];
    }
}
