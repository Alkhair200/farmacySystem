<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'email'      => 'required_without:id',
            'address'    => 'required|string|max:30',
            'gender'     => 'required',
            'UserJob'    => 'required',
            'mobile'     => 'required|min:10',
            'permissions' => 'required',
        ];
    }
}
