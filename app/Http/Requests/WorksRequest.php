<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class WorksRequest extends FormRequest
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
            'name' => 'sometimes|max:255',
            'working_at_moment' => 'sometimes|in:0,1',
            'if_yes_working_at_moment' => 'sometimes|max:255',
            'position' => 'sometimes|in:administração,analista_de_sistemas,analista_de_testes,desenvolvedor,marketing,product_owner,recursos_humanos,scrum_master,ux_designer,vendas',
            'pj' => 'sometimes|in:0,1',
            'salary' => 'sometimes|numeric',
            'email' => 'required|max:255',
            'status' => 'sometimes|in:contacted,no_answered,waiting',
            'contacted' => 'required|date_format:Y-m-d H:i:s',
        ];
    }

    public function failedValidation(Validator $validator) { 
        //write your bussiness logic here otherwise it will give same old JSON response
       throw new HttpResponseException(response()->json($validator->errors(), 422)); 
   }
}
