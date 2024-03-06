<?php

namespace Database\Factories;

use App\Enums\Condition;
use App\Models\Ship;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treasure>
 */
class TreasureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ship_id' => fake()->numberBetween(1, Ship::count()),
            'name' => fake()->name(),
            'description' => fake()->text(100),
            'value' => fake()->numberBetween(0, 100),
            'weight' => fake()->numberBetween(0, 100),
            'condition' => Condition::randomValue()
        ];
    }
}
