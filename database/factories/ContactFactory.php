<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'education_level' => $this->faker->randomElement(['High School', 'College', 'University']),
            'field' => $this->faker->jobTitle,
            'specialization' => $this->faker->randomElement(['Computer Science', 'Engineering', 'Business']),
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(18, 60),
            'interests' => $this->faker->randomElement(['Web Development', 'Data Science', 'Mobile App Development']),
            'career_project' => $this->faker->paragraph,
            'stage_requirements' => $this->faker->randomElement(['Fonctionnement plateforme Upwork', 'Autre']),
            'created_at' => now(),
        ];
    }
}
