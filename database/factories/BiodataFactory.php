<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('id_ID');
        $studyPrograms = [
            'Teknik Informatika',
            'Manajemen Informatika',
            'Bisnis Digital',
        ];

        return [
            'nim' => 'E' . random_int(00000000, 99999999),
            'fullname' => $faker->name(),
            'study_program' => fake()->randomElement($studyPrograms) ,
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'birthdate' => $faker->date('Y-m-d'),
        ];
    }
}
