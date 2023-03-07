<?php

namespace App\Models\API\Condominio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;

  protected $fillable = ['nome', 'cnpj', 'email', 'fone', 'whatsapp', 'cep', 'logradouro', 'numero', 'uf', 'cidade', 'complemento', 'bairro', 'image', 'facebook', 'twitter', 'linkedin', 'instagram', 'tiktok'];

  public function users()
  {
    return $this->hasMany(User::class);
  }
}
