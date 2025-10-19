<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTypes = ['Full-time', 'Part-time', 'Remote', 'Contract', 'Internship'];
        $experienceLevels = ['Entry Level', 'Mid Level', 'Senior Level'];
        $categories = ['Engineering', 'Design', 'Marketing', 'Product', 'Sales'];

        return [
            'job_role' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'job_type' => $this->faker->randomElement($jobTypes),
            'experience'=> $this->faker->randomElement($experienceLevels),
            'location'=> $this->faker->city(),
            'job_category'=> $this->faker->randomElement($categories),
            'logo'=> $this->faker->imageUrl(200, 200, 'business', true, 'logo'),
            'job_description' => $this->faker->paragraph(5),
            'salary' => $this->faker->numberBetween(50000, 350000) . 'NGN / Month',
        ];
    }
}


