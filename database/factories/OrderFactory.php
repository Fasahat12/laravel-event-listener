<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\PaymentType;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' => User::all()->random()->id,
            'payment' => fake()->randomElement([
                PaymentType::CashOnDelivery,
                PaymentType::CardOnDelivery,
                PaymentType::CardPayment
            ]),
            'shipping_address' => fake()->address(),
            'billing_address' => fake()->address()
        ];
    }
}
