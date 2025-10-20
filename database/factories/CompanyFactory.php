<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isOPened = ['YES', 'NO'];
        return [
            'company_name' => $this->faker->company(),
            'job_role' => $this->faker->jobTitle(),
            'logo'=> 'https://placehold.co/200x200/002266/FFFFFF?text=' . urlencode($this->faker->company),
            'location' => $this->faker->city() . '/' .$this->faker->country(),
            'about_company' => $this->faker->paragraph(),
            'open_position' => $this->faker->randomElement($isOPened)
        ];
    }
}
