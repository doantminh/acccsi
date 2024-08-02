<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChucVu extends Model
{
    use HasFactory;
    protected $table = 'chuc_vus';
    protected $fillable = [
        'ten_chuc_vu',
    ];
    public function updateChucVu($id, $data){
        DB::table('chuc_vus')
        ->where('id', $id)
        ->update($data);
    }
    public function user(){
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
