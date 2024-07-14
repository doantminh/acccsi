<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhuongThucThanhToanController extends Controller
{
    public function index(){
        $ptthanhtoan = DB::table('phuong_thuc_thanh_toans')->get();
        return view('admins.ptthanhtoan.index',['ptthanhtoan'=>$ptthanhtoan]);
    }
}
