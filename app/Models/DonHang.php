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
        'user_id',
        'ten_nguoi_nhan',
        'email_nguoi_nhan',
        'so_dien_thoai_nguoi_nhan',
        'dia_chi_nguoi_nhan',
        'ngay_dat',
        'tong_tien',
        'ghi_chu',
        'tien_hang',
        'tran_thai_don_hang',
        'tran_thai_thanh_toan',
        'tien_ship',
    ];

    const TRANG_THAI_DON_HANG = [
        'cho_xac_nhan' =>'Chờ các nhận',
        'da_xac_nhan'=>'Đã các nhận',
        'dang_chuan_bi'=>'Đang chuẩn bị',
        'dang_van_chuyen'=>'Đang vận chuyển',
        'da_van_chuyen'=>'Đã vận chuyển',
        'huy_don_hang'=>'Hủy đơn hàng',
    ];
    const TRANG_THAI_THANH_TOAN = [
        'chua_thanh_toan' =>'Chưa thanh toán',
        'da_thanh_toan'=>'Đã thanh toán',
        
    ];
    const CHO_XAC_NHAN = 'cho_xac_nhan';
    const DA_XAC_NHAN = 'da_xac_nhan';
    const DANG_CHUAN_BI = 'dang_chuan_bi';
    const DANG_VAN_CHUYEN = 'dang_van_chuyen';
    const DA_VAN_CHUYEN = 'da_van_chuyen';
    const HUY_DON_HANG = 'huy_don_hang';
    const CHUA_THANH_TOAN = 'chua_thanh_toan';
    const DA_THANH_TOAN = 'da_thanh_toan';
    

public function user(){
    return $this->belongsTo(User::class);
}
public function chiTietDonHang(){
    return $this->hasMany(chiTietDonHang::class);
}

    public $timestamps = false;
}
