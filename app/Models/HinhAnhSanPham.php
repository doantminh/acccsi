<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhSanPham extends Model
{
    use HasFactory;
    public function sanPham()
    {
        return $this->belongsTo(SanPham::class);
    }
    protected $table = 'hinh_anh_san_phams';
    protected $fillable = [
        'san_pham_id',
        'hinh_anh',
    ];

    public $timestamps = false;
}
