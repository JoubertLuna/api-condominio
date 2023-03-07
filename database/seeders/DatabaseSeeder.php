<?php

namespace Database\Seeders;

use Database\Seeders\API\Condominio\{
  CompanySeeder,
  UserSeeder
};


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      CompanySeeder::class,
      UserSeeder::class,
    ]);
  }
}
