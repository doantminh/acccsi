<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255,' . $this->route('user'),
            'email' => 'required|max:255',
            'so_dien_thoai' => 'required|numeric',
            'gioi_tinh' => 'required|in:0,1',
            'dia_chi' => 'required',
            'password' => 'required',
            'chuc_vu_id' => 'required',
            'trang_thai' => 'required|in:0,1'

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Họ và tên bắt buộc điền',
            'name.max' => 'Họ và tên không được quá 255 ký tự',

            'email.required' => 'email bắt buộc điền',
            'email.max' => 'email không được quá 255 ký tự',

            'so_dien_thoai.required' => 'số điện thoại bắt buộc điền',
            'so_dien_thoai.numeric' => 'số điện thoại phải là số',

            'gioi_tinh.required' => 'Giới tính bắt buộc điền',
            'gioi_tinh.in' => 'Nhập lại Giới tính',

            'dia_chi.required' => 'Địa chỉ bắt buộc điền',

            'password.required' => 'Password bắt buộc điền',

            'chuc_vu_id.required' => 'Chức vụ bắt buộc điền',

            'trang_thai.required' => 'Trạng thái bắt buộc điền',
            'trang_thai.in' => 'Nhập lại trạng thái',

        ];
    }
}
