<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacher extends FormRequest
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
            'code_teacher' =>'required|max:12',
            'password' => 'required|min:8',
            'name' => 'required|max:100',
            'gender' => 'required|max:100',
            'telephone' => 'required|max:100',
            'email' => 'required|email'
        ];
    }
    public function messages()
    {
        return [
            'code_teacher.required' => trans('customer.code_student.required'),
            'code_teacher.required.max' => trans('customer.code_student.max'),
            'name_teacher.required' => trans('customer.name.required'),
            'name_teacher.max' => trans('customer.name.max'),
            'gender.required' => trans('customer.address.required'),
            'address.max' => trans('customer.address.required'),
            'email.required' => trans('customer.email.required'),
            'email.email' => trans('customer.email.email'),
            'password.required' => trans('customer.email.psw_required'),
            'password.min' => trans('customer.email.psw_min'),
        ];
    }
}
