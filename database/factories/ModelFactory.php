<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => bcrypt(str_random(10)),
            'remember_token' => str_random(10),
        ];
    }
}
