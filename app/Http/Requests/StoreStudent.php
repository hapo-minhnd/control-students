<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'code_student' =>'required|max:12',
            'password' => 'required|min:8',
            'name' => 'required|max:100',
            'year_of_birth' => 'required|max:100',
            'address' => 'required|max:100',
            'code_class' => 'required',
            'email' => 'required|email'
        ];
    }
    public function messages()
    {
        return [
            'code_student.required' => trans('customer.code_student.required'),
            'code_student.required.max' => trans('customer.code_student.max'),
            'code_class.required' => trans('customer.code_class.required'),
            'code_class.number' => trans('customer.code_class.number'),
            'name.required' => trans('customer.name.required'),
            'name.max' => trans('customer.name.max'),
            'year_of_birth.required.required' => trans('customer.year_of_birth.required'),
            'year_of_birth.required.max' => trans('customer.year_of_birth.required'),
            'address.required' => trans('customer.address.required'),
            'address.max' => trans('customer.address.required'),
            'email.required' => trans('customer.email.required'),
            'email.email' => trans('customer.email.email'),
            'password.required' => trans('customer.email.psw_required'),
            'password.min' => trans('customer.email.psw_min'),
        ];
    }
}
