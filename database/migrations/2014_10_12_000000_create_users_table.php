<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('surname')->nullable();
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->string('cpf', 20)->nullable();
      $table->string('rg', 20)->nullable();
      $table->string('fone', 20)->nullable();
      $table->string('celular', 20)->nullable();
      $table->string('image')->default('default.jpg');
      $table->foreignId('company_id')->constrained()->onDelete('cascade');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
