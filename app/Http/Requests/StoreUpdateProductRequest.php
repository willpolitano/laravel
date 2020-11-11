<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:25',
            'descricao' => 'nullable|min:3|max:10000',
            'foto' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'descricao.required' => 'Descrição é obrigatório',
            'nome.min' => 'Nome deve conter mais que 3 caracteres',
            'descricao.min' => 'Descrição deve conter mais que 3 caracteres',
            'foto.required' => 'Imagem é obrigatório'
        ];
    }
}
