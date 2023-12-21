<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shop>
 */
class ShopFactory extends Factory
{
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => $this->faker->company,
            'avatar'      => $this->faker->imageUrl(200, 200, 'cats'),
            'email'       => $this->faker->unique()->safeEmail,
            'phone'       => '0' . $this->faker->randomNumber(9),
            'address'     => $this->faker->address,
            'description' => $this->faker->sentence,
            'rating'      => $this->faker->numberBetween(1, 5),
            'status'      => $this->faker->randomElement([Shop::DISABLED, Shop::ENABLED]),
        ];
    }
}
