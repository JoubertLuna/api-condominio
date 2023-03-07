<?php

namespace Database\Seeders\API\Condominio;

use App\Models\API\Condominio\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Company::create([
      'nome' => 'Condomínio Padrão',
      'email' => 'condominio@condominio.com',
      'cep' => '55000-000',
    ]);
  }
}
