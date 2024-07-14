<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    public function index(){
        $sanpham = DB::table('san_phams')->get();
        return view('admins.sanpham.index',['sanpham'=>$sanpham]);
    }
}
