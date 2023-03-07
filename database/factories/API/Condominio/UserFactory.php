<?php

namespace Database\Factories\API\Condominio;

use App\Models\API\Condominio\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Condominio\User>
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
      'name' => $this->faker->unique()->name(),
      'surname' => $this->faker->unique()->name(),
      'email' => fake()->unique()->safeEmail(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'cpf' => Str::random(18),
      'rg' => Str::random(10),
      'fone' => Str::random(14),
      'celular' => Str::random(15),
      'company_id' => Company::first()->id,
    ];
  }
}
