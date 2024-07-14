<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
{
    public function index(){
        $danhmuc = DB::table('danh_mucs')->get();
        return view('admins.danhmuc.index',['danhmuc'=>$danhmuc]);
    }
}
