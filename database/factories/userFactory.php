<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UserName'=>fake()->name($gender = 'male'),
            'UserEmail'=>fake()->unique()->email(),
            'UserCity'=>fake()->city(),
            'UserAddress'=>fake()->address(),
            'UserContact'=>fake()->phoneNumber(),
            'UserAge'=>fake()->randomElement(range(18,50)),
            'UserGender'=>'Male'
        ];
    }
}
