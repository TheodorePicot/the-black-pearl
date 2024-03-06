<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ship;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'password' => '$2y$12$jYXn/skTDCVgd3jlhjzQi.G3JyNz9ajkZ5uzBETyQWVDfmUbAzbXa',
            'email' => 'theodorebjpicot@gmail.com',
            'name' => 'Theodore',
            'is_captain' => true
        ]);
        Ship::factory()->hasTreasures(10)->hasResources(10)->hasCrew(10)->create([
            'user_id' => 1
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
