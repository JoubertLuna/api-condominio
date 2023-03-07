<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'name' => $this->name,
      'email' => $this->email,
      'surname' => $this->surname,
      'fone' => $this->fone,
      'cpf' => $this->cpf,
      'celular' => $this->celular,
      'rg' => $this->rg,
      'image' => $this->image ? Storage::url($this->image) : '',
      'company_id' => $this->company_id,
      'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y'),
      'ultima_atualizacao' => Carbon::parse($this->updated_at)->format('d/m/Y'),
    ];
  }
}
