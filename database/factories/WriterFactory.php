<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
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
            'writer_name' => $this->faker->name(),
            'logo'=> 'https://placehold.co/200x200/002266/FFFFFF?text=' . urlencode($this->faker->company),
            'bio' => $this->faker->paragraph(200),
            'job_type' => $this->faker->randomElement($jobTypes),
            'experience'=> $this->faker->randomElement($experienceLevels),
            'job_category'=> $this->faker->randomElement($categories),
            'job_role' => $this->faker->jobTitle(),
            'location'=> $this->faker->city(),
            'email'=> $this->faker->email(),
            'salary' => $this->faker->numberBetween(50000, 350000) . 'NGN / Month',
        ];
    }
}
