<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten_nguoi_nhan' => 'required|max:255',
            'email_nguoi_nhan' => 'required|max:255',
            'so_dien_thoai_nguoi_nhan' => 'required|numeric',
            'dia_chi_nguoi_nhan' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_nguoi_nhan.required' => 'Họ và tên bắt buộc điền',
            'ten_nguoi_nhan.max' => 'Họ và tên không được quá 255 ký tự',

            'email_nguoi_nhan.required' => 'email bắt buộc điền',
            'email_nguoi_nhan.max' => 'email không được quá 255 ký tự',

            'so_dien_thoai_nguoi_nhan.required' => 'số điện thoại bắt buộc điền',
            'so_dien_thoai_nguoi_nhan.numeric' => 'số điện thoại phải là số',

            'dia_chi_nguoi_nhan.required' => 'Địa chỉ bắt buộc điền',

        

        ];
    }
}
