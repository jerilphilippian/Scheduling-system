<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function configure()
    {
        return $this->afterCreating(
            function (User $user) {
                UserData::factory()->create(
                    [
                        'first_name' => $this->faker->firstName(),
                        'middle_name' => $this->faker->lastName(),
                        'last_name' => $this->faker->lastName(),
                        'position' => $this->faker->jobTitle(),
                        'user_id' => $user->id,
                        'department_id' => Department::all()->random(),
                        'role_id' => Roles::all()->random(),
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );
            }
        );
    }
}
