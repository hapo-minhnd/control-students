<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudent extends FormRequest
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
            'name' => 'required|max:100',
            'year_of_birth' => 'required|max:100',
            'address' => 'required|max:100',
            'code_class' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'code_student.required' => trans('customer.code_student.required'),
            'code_student.required.max' => trans('customer.code_student.max'),
            'code_class.required' => trans('customer.code_class.required'),
            'name.required' => trans('customer.name.required'),
            'name.max' => trans('customer.name.max'),
            'year_of_birth.required.required' => trans('customer.year_of_birth.required'),
            'year_of_birth.required.max' => trans('customer.year_of_birth.max'),
            'address.required' => trans('customer.address.required'),
            'address.max' => trans('customer.address.required'),
        ];
    }
}

