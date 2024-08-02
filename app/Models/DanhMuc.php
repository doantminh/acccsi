<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{

    public function updateDanhmuc($id, $data)
    {
        DB::table('danh_mucs')
            ->where('id', $id)
            ->update($data);
    }
    public function sanPham(){
        return $this->hasMany(SanPham::class);
    }
    use HasFactory;
    protected $table = 'danh_mucs';
    protected $fillable = [
        'ten_danh_muc',
        'hinh_anh',
        'mo_ta',
    ];

    public $timestamps = false;

}
