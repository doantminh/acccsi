<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    public function index(){
        $sanpham = DB::table('san_phams')->get();
        $danhmuc = DB::table('danh_mucs')->get();
        return view('admins.sanpham.index',['sanpham'=>$sanpham,'danhmuc'=>$danhmuc]);
    }
    public function create(){
        $danhmuc = DB::table('danh_mucs')->get();
        return view('admins.sanpham.add',['danhmuc'=>$danhmuc]);
    }
    public function store(Request $request) {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('hinh_anh')){
                $filename = $request->file('hinh_anh')->store('uploads/sanpham','public');
            }
            else{
                $filename = null;
            }
            $params['hinh_anh'] = $filename;
            SanPham::create($params);
            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }
}
