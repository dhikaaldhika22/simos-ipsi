<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OutletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'outlet_name' => $this->faker->name(),
            'kota' => $this->faker->kota(),
            'alamat' => $this->faker->alamat(),
            'outlet_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
