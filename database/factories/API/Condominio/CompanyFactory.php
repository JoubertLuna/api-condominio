<?php

namespace Database\Factories\API\Condominio;

use App\Models\API\Condominio\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Condominio\Company>
 */
class CompanyFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */

  protected $model = Company::class;

  public function definition(): array
  {
    return [
      'nome' => $this->faker->unique()->name(),
      'email' => fake()->unique()->safeEmail(),
      'cnpj' => Str::random(18),
      'fone' => Str::random(14),
      'cep' => Str::random(14),
      'logradouro' => $this->faker->sentence(10),
      'numero' => Str::random(2),
      'uf' => Str::random(2),
      'cidade' => $this->faker->sentence(10),
      'complemento' => $this->faker->sentence(10),
      'bairro' => $this->faker->sentence(10),
      'facebook' => Str::random(5),
      'twitter' => Str::random(5),
      'linkedin' => Str::random(5),
      'instagram' => Str::random(5),
      'tiktok' => Str::random(5),
      'whatsapp' => Str::random(5),
    ];
  }
}
