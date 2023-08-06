<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bimbingan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bimbingan>
 */
class BimbinganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'user_id' => fake()->unique()->numberBetween(1,2),
            'umur' => fake()->unique()->numberBetween(1,20),
            'domisili' => fake()->city(),
            'type' => fake()->randomElement(['Online','Offline']),
            'waktu' => fake()->randomElement(['Pagi','Siang','Malam']),
            'linkwa' => fake()->randomElement(['https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA']),
        ];
    }
}
