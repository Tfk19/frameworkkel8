<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $positionIds = Position::pluck('id')->toArray();

        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'age' => $this->faker->numberBetween(25, 50),
            'position_id' => $this->faker->randomElement($positionIds)
        ];
    }
}
