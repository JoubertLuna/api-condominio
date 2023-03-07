<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CompanyResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'nome' => $this->nome,
      'email' => $this->email,
      'cnpj' => $this->cnpj,
      'fone' => $this->fone,
      'cep' => $this->cep,
      'logradouro' => $this->logradouro,
      'numero' => $this->numero,
      'uf' => $this->uf,
      'cidade' => $this->cidade,
      'complemento' => $this->complemento,
      'bairro' => $this->bairro,
      'image' => $this->image ? Storage::url($this->image) : '',
      'facebook' => $this->facebook,
      'twitter' => $this->twitter,
      'linkedin' => $this->linkedin,
      'instagram' => $this->instagram,
      'tiktok' => $this->tiktok,
      'whatsapp' => $this->whatsapp,
      'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y'),
      'ultima_atualizacao' => Carbon::parse($this->updated_at)->format('d/m/Y'),
    ];
  }
}
