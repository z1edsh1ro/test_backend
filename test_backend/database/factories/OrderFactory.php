<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\P2p;
use App\Models\User;
use App\Models\Market;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::inRandomOrder()->first()->id;
        $p2p_id = P2p::inRandomOrder()->first()->id;
        $market_id = Market::inRandomOrder()->first()->id;
        $faker = Faker::create();
        
        return [
            'user_id' => $user_id,
            'p2p_id' => $p2p_id,
            'market_id' => $market_id,
            'amount' => $faker->randomFloat(8, 0.0001, 10),
            'method' => $faker->boolean ? 1 : 0,
        ];
    }
}
