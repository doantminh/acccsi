<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Models\DanhMuc;
use App\Models\HinhAnhSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    public $sanpham;
    public function __construct() {
        $this->sanpham = new SanPham();
    }
    public function index(Request $request){
        $search = $request->input('search');
        $danhmucID = $request->input('danh_muc_id');

        $listSanPham = SanPham::query()
            ->when($search, function ($query, $search) {
                return $query
                        ->where('ten_san_pham', 'like', "%{$search}%");
            })
            ->when($danhmucID !== null, function ($query) use($danhmucID) {
                return $query->where('danh_muc_id','=',$danhmucID);
            })
            ->paginate(5);
        $title = 'Danh sách sản phẩm';
        $danhmuc = DB::table('danh_mucs')->get();
        return view('admins.sanpham.index',compact('listSanPham','danhmuc','title'));
    }
    public function create(){
        $danhmuc = DB::table('danh_mucs')->get();
        $title = 'Thêm mới sản phẩm';
        return view('admins.sanpham.add',compact('danhmuc','title'));
    }
    public function store(SanPhamRequest $request) {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('hinh_anh')){
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham','public');
            }
            else{
                $params['hinh_anh'] = null;
            }
            
            $sanPham = SanPham::query()->create($params);

            $sanPhamId = $sanPham->id;
            if($request->hasFile('list_hinh_anh')){
                foreach($request->file('list_hinh_anh') as $image){
                    if($image){
                        $path = $image->store('uploads/hinhanhsanpham/id_'. $sanPhamId, 'public');
                        $sanPham->hinhAnhSanPham()->create([
                            'san_pham_id' =>$sanPhamId,
                            'hinh_anh'=>$path,
                        ]);
                    }
                }
            }

            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }
    public function show(string $id){
        $sanpham = SanPham::query()->findOrFail($id);
        $danhmuc = DB::table('danh_mucs')->get();
        $binhluan = DB::table('binh_luans')->where('san_pham_id',$id)->get();
        $hinhanhsp = DB::table('hinh_anh_san_phams')->where('san_pham_id',$id)->get();
        // $user = DB::table('users')->where('id',$binhluan->user_id)->get();
        $title = 'Chi tiết sản phẩm';
        return view('admins.sanpham.detail',compact('sanpham','danhmuc','binhluan','hinhanhsp','title'));

    }

    public function edit(string $id){
        $title = 'cập nhật thông tin sản phẩm';

        $danhmuc = DB::table('danh_mucs')->get();
        $sanpham = SanPham::query()->findOrFail($id);
        $hinhanhsp = DB::table('hinh_anh_san_phams')->where('san_pham_id',$id)->get();
        return view('admins.sanpham.edit',compact('sanpham','danhmuc','title','hinhanhsp'));
        
    }
    public function update(Request $request,string $id){
        if($request->isMethod('PUT')){
            $params = $request->except('_token','_method');
            $sanpham = SanPham::query()->findOrFail($id);
            if ($request->hasFile('hinh_anh')) {
                if ($sanpham->hinh_anh && Storage::disk('public')->exists($sanpham->hinh_anh)) {
                    Storage::disk('public')->delete($sanpham->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham','public');
            }else {
                $params['hinh_anh'] = $sanpham->hinh_anh;
            }

            if ($request->hasFile('list_hinh_anh')) {
                $curremtImage = $sanpham->hinhAnhSanPham->pluck('id')->toArray();
                $arrayCombine = array_combine($curremtImage,$curremtImage);

                foreach($arrayCombine as $key => $value){
                    if(!array_key_exists($key, $request->list_hinh_anh)){
                        $hinhAnhSanPham = HinhAnhSanPham::query()->find($key);
                        if ($hinhAnhSanPham && Storage::disk('public')->exists($hinhAnhSanPham->hinh_anh)) {
                            Storage::disk('public')->delete($hinhAnhSanPham->hinh_anh);
                            $hinhAnhSanPham->delete();
                        }
                    }
                }
                foreach($request->list_hinh_anh as $key=>$image){
                    if(!array_key_exists($key, $arrayCombine)){
                        if($request->hasFile("list_hinh_anh.$key")){
                            $path = $image->store('uploads/hinhanhsanpham/id_'. $id, 'public');
                            $sanpham->hinhAnhSanPham()->create([
                                'san_pham_id' =>$id,
                                'hinh_anh'=>$path,
                            ]);
                        }
                    }
                    elseif(is_file($image) && $request->hasFile("list_hinh_anh.$key")){
                        $hinhAnhSanPham = HinhAnhSanPham::query()->find($key);
                        if ($hinhAnhSanPham && Storage::disk('public')->exists($hinhAnhSanPham->hinh_anh)) {
                            Storage::disk('public')->delete($hinhAnhSanPham->hinh_anh);
                        }
                        $path = $image->store('uploads/hinhanhsanpham/id_'. $id, 'public');
                            $hinhAnhSanPham->update([
                                'hinh_anh'=>$path,
                            ]);
                    }
                }

                }
                $sanpham->update($params);

            return redirect()->route('sanpham.index')->with('success', 'Sửa sản phẩm thành công!');
        }
    }
}
