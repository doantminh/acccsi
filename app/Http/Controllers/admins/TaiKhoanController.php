<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaiKhoanController extends Controller
{
    public function index(){
        $taikhoan = DB::table('tai_khoans')->get();
        return view('admins.taikhoan.index',['taikhoan'=>$taikhoan]);
    }
    public function create(){
        $chucvu = DB::table('chuc_vus')->get();
        return view('admins.taikhoan.add',['chucvu'=>$chucvu]);
    }
    public function store(Request $request) {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('anh_dai_dien')){
                $filename = $request->file('anh_dai_dien')->store('uploads/taikhoan','public');
            }
            else{
                $filename = null;
            }
            $params['anh_dai_dien'] = $filename;
            TaiKhoan::create($params);
            return redirect()->route('taikhoan.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }
}
