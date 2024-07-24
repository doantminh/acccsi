<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'anh_dai_dien',
        'name',
        'email',
        'so_dien_thoai',
        'gioi_tinh',
        'dia_chi',
        'password',
        'mat_khau',
        'chuc_vu_id',
        'trang_thai',
        'deleted_at'
    ];
    public function updateUser($id, $data)
    {
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }
    public $timestamps = false;
}
