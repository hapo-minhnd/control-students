<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePoint extends FormRequest
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
            'code_class' => 'required|max:100',
            'point' => 'max:100',
        ];
    }
    public function messages()
    {
        return [
            'code_student.required' => trans('customer.code_student.required'),
            'code_student.required.max' => trans('customer.code_student.max'),
            'name.required' => trans('customer.name.required'),
            'name.max' => trans('customer.name.max'),
            'code_subject.required.required' => trans('customer.year_of_birth.required'),
            'code_subject.required.max' => trans('customer.year_of_birth.max'),
            'point.max' => trans('customer.address.required'),
        ];
    }
}

