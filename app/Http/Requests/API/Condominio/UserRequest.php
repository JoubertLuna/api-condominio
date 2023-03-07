<?php

namespace App\Http\Requests\API\Condominio;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
      'name' => "required|min:3|max:255|unique:users,name,{$id},id",
      'surname' => "nullable|min:3|max:255|unique:users,name,{$id},id",
      'email' => "required|string|email|max:255|unique:users,email,{$id},id",
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'cpf' => 'nullable|min:14|max:14|',
      'fone' => 'nullable|min:14|max:14|',
      'celular' => 'nullable|min:15|max:15|',
      'image' => 'nullable|max:2048|',
      'rg' => 'nullable|min:9|max:10|',
      'company_id' => 'exists:companies,id',
    ];
  }
}
