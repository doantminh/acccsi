<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhLuanContrller extends Controller
{
    public function index(){
        $binhluan = DB::table('binh_luans')->get();
        return view('admins.binhluan.index',['binhluan'=>$binhluan]);
    }
    public function create(){
        $taikhoan = DB::table('tai_khoans')->get();
        $sanpham = DB::table('san_phams')->get();
        return view('admins.binhluan.add',['taikhoan'=>$taikhoan,'sanpham'=>$sanpham]);
    }
    public function store(Request $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            BinhLuan::create($params);
            return redirect()->route('binhluan.index')->with('success', 'Thêm chức vụ thành công!');
        }
    }
    public function destroy(string $id ){
        $binhluan = BinhLuan::query()->findOrFail($id);
        if ($binhluan) {
            $binhluan->delete();

            return redirect()->route('sanpham.index')->with('success', 'Xóa sản phẩm thành công!');
        }
    }
}
