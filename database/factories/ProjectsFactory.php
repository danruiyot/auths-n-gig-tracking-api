<?php

namespace Database\Factories;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 800),
            'price' => $this->faker->numberBetween($min = 10, $max = 900),
            'client_id' => $this->faker->numberBetween($min = 1, $max = 300),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 100),
            'is_done' => $this->faker->boolean(),
            'due_when' => $this->faker->dateTimeBetween('-2 days', '+1 week'),

            //
        ];
    }
}
