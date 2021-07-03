<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'photo'=>'required_without:id|mimes:png,jpeg,gif,jpg',
            'name'=>'required',

        ];
    }

    public function messages()
    {
        return [
           'photo.mimes'=>__('admin/brand.Bad extension file, must be png,jpeg, gif or jpg *'),
            'photo.required'=>__('admin/brand.Photo required *'),
            'name.required'=>__('admin/brand.name required'),

        ];
    }
}
