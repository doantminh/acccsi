<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaiKhoanController extends Controller
{
    public function index(){
        $taikhoan = DB::table('tai_khoans')->get();
        return view('admins.taikhoan.index',['taikhoan'=>$taikhoan]);
    }
}
