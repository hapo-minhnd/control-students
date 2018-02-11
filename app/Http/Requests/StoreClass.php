<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClass extends FormRequest
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
            'code_class' =>'required',
            'name_class' => 'required',
            'code_subject' => 'required',
            'semester' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code_class.required' => trans('customer.code_class.required'),
            'name_class.required' => trans('customer.code_class.required'),
            'code_subject.required' => trans('customer.code_class.required'),
            'semester.required' => trans('customer.code_class.required'),
        ];
    }
}
