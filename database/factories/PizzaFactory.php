<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
            'extra cheese',
            'black olives',
            'pepperoni',
            'sausage',
            'anchovies',
            'jalapenos',
            'onion',
            'chicken',
            'ground beef',
            'green peppers',
        ];

        $toppings = [];

        for($i = 1; $i <= rand(1, 4); $i++) {
            $toppings[] = Arr::random($toppingChoices);
        }

        $toppings = array_unique($toppings);

        return [
            'id' => rand(11111, 99999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['small', 'medium', 'large', 'extra large']),
            'crust' => Arr::random(['normal', 'thin', 'garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['ordered', 'prepping', 'baking', 'checking', 'ready']),
        ];
    }
}
