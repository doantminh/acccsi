<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DanhMucController extends Controller
{
    public $danhmuc;
    public function __construct() {
        $this->danhmuc = new DanhMuc();
    }
    public function index(){
        $listdanhmuc = DanhMuc::query()->paginate(5);
        $title = 'Danh mục sản phẩm';
        return view('admins.danhmuc.index',compact('listdanhmuc','title'));
    }
    public function create(){
        $title = 'Thêm mới danh mục';
        return view('admins.danhmuc.add',compact('title'));
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
    public function edit(string $id){
        $title = 'Chỉnh sửa danh mục';
        $danhmuc = DanhMuc::query()->findOrFail($id);
        return view('admins.danhmuc.edit',compact('danhmuc','title'));
    }
    public function update(Request $request, string $id){
        if ($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            $danhmuc = DanhMuc::query()->findOrFail($id);

            if ($request->hasFile('hinh_anh')) {
                if ($danhmuc->hinh_anh && Storage::disk('public')->exists($danhmuc->hinh_anh)) {
                    Storage::disk('public')->delete($danhmuc->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/taikhoan','public');
            }else {
                $params['hinh_anh'] = $danhmuc->hinh_anh;
            }
            $this->danhmuc->updateDanhmuc($id,$params);
            return redirect()->route('danhmuc.index')->with('success', 'Sửa thông tin thành công!');
        }
    }
}
