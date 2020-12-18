<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition()
    {
        return [
            'initials' => strtoupper($this->faker->stateAbbr()),
            'lastname' => $this->faker->lastName(20),
            'age' => $this->faker->randomNumber(2),
            'country' => $this->faker->country,
        ];
    }
}
