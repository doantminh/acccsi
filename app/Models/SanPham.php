<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
        'ma_sp',
        'ten_san_pham',
        'hinh_anh',
        'so_luong',
        'gia_san_pham',
        'gia_khuyen_mai',
        'ngay_nhap',
        'mo_ta',
        'danh_muc_id',
        'trang_thai',
    ];

    public function danhMuc(){
        return $this->belongsTo(DanhMuc::class);
    }
    public function hinhAnhSanPham(){
        return $this->hasMany(HinhAnhSanPham::class);
    }

    public $timestamps = false;
}
