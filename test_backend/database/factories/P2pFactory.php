<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\P2p;
use App\Models\User;
use App\Models\Currency;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\P2p>
 */
class P2pFactory extends Factory
{

    protected $model = P2p::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sender_user_id = User::inRandomOrder()->first()->id;
        $currency_id = Currency::inRandomOrder()->first()->id;
        $faker = Faker::create();
        
        return [
            'sender_user_id' => $sender_user_id,
            'currency_id' => $currency_id,
            'message' => $faker->sentence(),
            'amount' => $faker->randomFloat(8, 0.0001, 10),
            'method' => $faker->boolean ? 1 : 0,
        ];
    }
}
