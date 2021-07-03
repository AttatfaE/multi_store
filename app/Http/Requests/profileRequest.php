<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends FormRequest
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
            'name'=>'required',
            'email'=> 'required|email|unique:admins,email,'.$this->id,
            'password'=>'nullable|required_with:password_confirmation|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>__('admin/profile.name required'),
            'email.required'=> __('admin/profile.email required'),
            'email.email'=>__('admin/profile.field must be a valid email'),
            'email.unique'=> __('admin/profile.The email has already been taken'),
            'password.confirmed'=> __('admin/profile.password and confirm password are not same'),
            'password.min'=>__('admin/profile.password must be more than 6 caracters'),
        ];
    }
}
