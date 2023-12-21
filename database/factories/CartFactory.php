<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray();

        return [
            'token'   => $this->faker->sha256(),
            'status'  => $this->faker->randomElement([Cart::ACTIVE, Cart::INACTIVE, Cart::COMPLETED, Cart::EXPIRED]),
            'user_id' => $this->faker->unique()->randomElement($userIds),
        ];
    }
}
