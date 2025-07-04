<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
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
    return [
      'name' => $this->faker->name(),
      'address' => $this->faker->address(),
      'phone' => $this->faker->phoneNumber(),
      'nit' => $this->faker->unique()->randomNumber(9),
      'active' => true,
    ];
  }
}
