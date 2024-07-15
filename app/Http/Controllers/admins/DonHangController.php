<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    public function index(){
        $donhang = DB::table('don_hangs')->get();
        $title = "Danh sách đơn hàng";
        return view('admins.donhang.index',compact('title','donhang'));
    }
    public function create(){
        $taikhoan = DB::table('tai_khoans')->get();
        $pttt = DB::table('phuong_thuc_thanh_toans')->get();
        $trangthai = DB::table('trang_thai_don_hangs')->get();
        return view('admins.donhang.add',compact('taikhoan','pttt','trangthai'));
    }
    public function store(Request $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            DonHang::create($params);
            return redirect()->route('donhang.index')->with('success', 'Thêm chức vụ thành công!');
        }
    }
}
