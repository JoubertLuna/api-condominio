<?php

namespace App\Http\Requests\API\Condominio;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array
  {

    $id = $this->segment(2);

    return [
      'nome' => "required|min:3|max:255|unique:companies,nome,{$id},id",
      'email' => "required|string|email|max:255|unique:companies,email,{$id},id",
      'cep' => 'nullable|min:9|max:10|',
      'logradouro' => 'nullable|max:200|',
      'numero' => 'nullable|numeric',
      'uf' => 'nullable|min:2|max:2|',
      'cidade' => 'nullable|max:200|',
      'complemento' => 'nullable|max:200|',
      'bairro' => 'nullable|max:200|',
      'cnpj' => 'required|min:18|max:18|',
      'fone' => 'nullable|min:14|max:14|',
      'image' => 'nullable|max:2048|',
      'facebook' => 'nullable|min:10|max:255|',
      'twitter' => 'nullable|min:10|max:255|',
      'linkedin' => 'nullable|min:10|max:255|',
      'instagram' => 'nullable|min:10|max:255|',
      'tiktok' => 'nullable|min:10|max:255|',
      'whatsapp' => 'nullable|min:15|max:15|',
    ];
  }
}
