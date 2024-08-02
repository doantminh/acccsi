<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{

    public function show(string $id){
        $sanpham = SanPham::query()->findOrFail($id);
        $danhmuc = DB::table('danh_mucs')->get();
        $hinhanhsp = DB::table('hinh_anh_san_phams')->where('san_pham_id',$id)->get();
        $binhluan = DB::table('binh_luans')->where('san_pham_id',$id)->get();
        $size = DB::table('sizes')->get();
        $listSanPham = SanPham::query()->get();

        return view('clients.detail',compact('sanpham','danhmuc','hinhanhsp','binhluan','size','listSanPham'));
    }
}
