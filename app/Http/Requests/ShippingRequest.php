<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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
            'id'=>'required|exists:settings',
            'value'=>'required',
            'plain_value'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'value.required'=>'field required',
            'value.exists'=>'this id dosnt exist',
            'plain_value.numeric'=>'this value is not numeric',
            'plain_value.required'=>'field required',

        ];
    }
}
