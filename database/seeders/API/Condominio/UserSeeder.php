<?php

namespace Database\Seeders\API\Condominio;

use App\Models\API\Condominio\Company;
use App\Models\API\Condominio\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Administrador - Condomínio',
      'email' => 'administrador@condominio.com',
      'password' => Hash::make('@admin123'),
      'company_id' => Company::first()->id,
    ]);
  }
}
