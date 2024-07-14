<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhLuanContrller extends Controller
{
    public function index(){
        $binhluan = DB::table('binh_luans')->get();
        return view('admins.binhluan.index',['binhluan'=>$binhluan]);
    }
}
