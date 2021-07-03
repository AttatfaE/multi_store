<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            //'photo'=>'required_without:id|mimes:png,jpeg,gif,jpg',
            'name'=>'required',
            'slug'=> 'required|unique:categories,slug,'.$this->id,
            //'parentId'=>'required'
        ];
    }

    public function messages()
    {
        return [
//            'photo.required'=>'photo required',
//            'photo.memes'=>'photo required',
            'name.required'=>__('admin/category.name required'),
            'slug.required'=> __('admin/category.slug required'),
            //'parentId.required'=>__('admin/subCategory.category select required'),
            'slug.unique'=> __('admin/category.this category slug is already exists'),

        ];
    }
}
