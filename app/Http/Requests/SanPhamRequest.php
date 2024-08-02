<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
            'ma_sp' => 'required|max:10|unique:san_phams,ma_sp,' .$this->route('sanpham'),
            'ten_san_pham'=>'required|max:255',
            'hinh_anh'=>'image|mimes:jpg,jpeg,png,gif',
            'so_luong'=>'required|min:0',
            'gia_san_pham'=>'required|numeric|min:0',
            'gia_khuyen_mai'=>'required|numeric|min:0',
            'ngay_nhap'=>'required|date',
            'danh_muc_id'=>'required|exists:danh_mucs,id',
        ];
    }
    public function messages()
    {
        return [
            'ma_sp.required' => 'Mã sản phẩm bắt buộc điền',
            'ma_sp.max' => 'Mã sản phẩm không được quá 10 ký tự',
            'ma_sp.unique' => 'Mã sản phẩm đã tồn tại',

            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc điền',
            'ten_san_pham.max' => 'Tên sản phẩm không được quá 255 ký tự',

            'hinh_anh.required' => 'Hinh ảnh không hợp lệ',
            'hinh_anh.mimes' => 'Hinh ảnh không hợp lệ',

            'so_luong.required' => 'Số lượng bắt buộc điền',
            'so_luong.min' => 'Số lượng phải lớn hơn 0',

            'gia_san_pham.required' => 'Giá sản phẩm bắt buộc điền',
            'gia_san_pham.numeric' => 'Giá sản phẩm phải là số',
            'gia_san_pham.min' => 'Giá sản phẩm phải lớn hơn 0',

            'gia_khuyen_mai.required' => 'Giá sản phẩm bắt buộc điền',
            'gia_khuyen_mai.numeric' => 'Giá sản phẩm phải là số',
            'gia_khuyen_mai.min' => 'Giá sản phẩm phải lớn hơn 0',

            'ngay_nhap.required' => 'Ngày nhập bắt buộc điền',
            'ngay_nhap.date' => 'Nhập lại ngày nhập',

            'danh_muc_id.required' => 'Danh mục bắt buộc điền',
            'danh_muc_id.exists' => 'Danh mục không hợp lệ',
        ];
    }
}
