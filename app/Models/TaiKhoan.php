<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;
    protected $table = 'tai_khoans';
    protected $fillable = [
        'anh_dai_dien',
        'ho_ten',
        'email',
        'so_dien_thoai',
        'gioi_tinh',
        'dia_chi',
        'ngay_sinh',
        'mat_khau',
        'chuc_vu_id',
        'trang_thai',
    ];

    public $timestamps = false;
}
