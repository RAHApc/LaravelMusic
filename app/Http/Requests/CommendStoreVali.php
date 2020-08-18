<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Route;

class CommendStoreVali extends FormRequest
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
            'name' => 'required',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام را وارد نکرده اید.',
            'body.required'=>':attribute را وارد نکرده اید.'
        ];
    }
}
