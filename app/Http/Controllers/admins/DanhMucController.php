<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
{
    public function index(){
        $danhmuc = DB::table('danh_mucs')->get();
        return view('admins.danhmuc.index',['danhmuc'=>$danhmuc]);
    }
    public function create(){
        return view('admins.danhmuc.add');
    }
    public function store(Request $request ){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('hinh_anh')){
                $filename = $request->file('hinh_anh')->store('uploads/danhmuc','public');
            }
            else{
                $filename = null;
            }
            $params['hinh_anh'] = $filename;
            DanhMuc::create($params);
            return redirect()->route('danhmuc.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }
}
