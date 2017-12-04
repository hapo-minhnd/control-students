<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPost extends FormRequest
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
            'email' =>'required|email',
            'password' => 'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => trans('customer.email.required'),
            'email.email' => trans('customer.email.email'),
            'password.required' => trans('customer.email.psw_required'),
            'password.min' => trans('customer.email.psw_min'),
        ];
    }
}
