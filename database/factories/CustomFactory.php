<?php

namespace Database\Factories;

use App\Models\Custom;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Custom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
        {
            return [
                'firstname' => $this->faker->text(30),
                'lastname' => $this->faker->text(),
            ];
        }
}
