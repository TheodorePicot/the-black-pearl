<?php

namespace Database\Factories;

use App\Enums\ResourceType;
use App\Models\Ship;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
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
            'quantity' => fake()->numberBetween(0, 100),
            'type' => ResourceType::randomValue()
        ];
    }
}
