<?php
/**
 * Created by PhpStorm.
 * User: Minh Nguyen
 * Date: 12/4/2017
 * Time: 2:34 PM
 */
return array(
    'email' => [
        'required' => 'Email không đúng định dạng',
        'email' => 'Email không đúng định dạng',
        'psw_required' => 'Mật khẩu là trường bắt buộc',
        'psw_min' =>'Mật khẩu phải chứa ít nhất 8 ký tự',
    ],
    'error' =>[
        'login' => 'Email hoặc mật khẩu không đúng',
    ],
    'name' => [
        'required' => 'Tên là trường bắt buộc',
        'max' => 'Tên quá dài',
    ],
    'year_of_birth' => [
        'required' => 'Năm sinh không đúng định dạng',
    ],
    'address' => [
        'required' => 'Địa chỉ là trường bắt buộc',
        'max' => 'Địa chỉ quá dài',
    ],
    'code_student' => [
        'required' => 'Mã sinh viên là trường bắt buộc',
        'max' => 'Mã sinh viên quá dài',
    ],
    'code_class' => [
        'required' => 'Mã lớp là trường bắt buộc',
    ],
);
