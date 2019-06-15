<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class OpportunityRequest extends FormRequest
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
            'opportunity' => 'sometimes|max:255',
            'description' => 'sometimes|max:255',
            'city' => 'sometimes|in:São Paulo-SP,Uberlândia-MG,Catanduva-SP',
            'contraction_type' => 'sometimes|in:clt,pj,freelancer',
            'salary' => 'sometimes|numeric',
            'status' => 'sometimes|in:0,1',
            'contacted' => 'required|date_format:Y-m-d H:i:s'
        ];
    }

    public function failedValidation(Validator $validator) { 
        //write your bussiness logic here otherwise it will give same old JSON response
       throw new HttpResponseException(response()->json($validator->errors(), 422)); 
   }

}
