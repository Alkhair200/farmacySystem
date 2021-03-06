<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => 'required|string|max:10',
            'last_name'  => 'required|string|max:10',
            'email'      => 'required|email|unique:users,email,'.$this->id,
            'address'    => 'required|string|max:30',
            'gender'     => 'required',
            'UserJob'    => 'required',
            'mobile'     => 'required|min:10',
            'password'   => 'required|confirmed',
            'permissions' => 'required',
        ];
    }

    public function messages()
    {
        return [
             'email.unique' => 'هذ الايميل مستخدم من قبل',
            'mobile.unique' => 'هذ الرقم مستخدم من قبل',
        ];
    }
}
