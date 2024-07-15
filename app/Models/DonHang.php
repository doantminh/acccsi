<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table = 'don_hangs';
    protected $fillable = [
        'ma_don_hang',
        'tai_khoan_id',
        'ten_nguoi_nhan',
        'email_nguoi_nhan',
        'so_dien_thoai_nguoi_nhan',
        'dia_chi_nguoi_nhan',
        'ngay_dat',
        'tong_tien',
        'ghi_chu',
        'phuong_thuc_thanh_toan_id',
        'trang_thai_don_hang_id',
    ];

    public $timestamps = false;
}
