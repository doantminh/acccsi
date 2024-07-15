<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = 'binh_luans';
    protected $fillable = [
        'tai_khoan_id',
        'san_pham_id',
        'noi_dung',
        'thoi_gian',
        
    ];

    public $timestamps = false;
}
