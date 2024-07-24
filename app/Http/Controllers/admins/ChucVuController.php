<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChucVuController extends Controller
{
    public $chuc_vu;

    public function __construct() {
        $this->chuc_vu = new ChucVu();
    }

    public function index(){
        $chucvu = DB::table('chuc_vus')->get();
        return view('admins.chucvu.index',['chucvu'=>$chucvu]);
    }
    public function create() {
        return view('admins.chucvu.add');
    }
    public function store(Request $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            ChucVu::create($params);
            return redirect()->route('chucvu.index')->with('success', 'Thêm chức vụ thành công!');
        }
    }
    public function edit(string $id) {
        $chucvu = ChucVu::query()->findOrFail($id);
        if(!$chucvu){
            return redirect()->route('chucvu.index')->with('erorr', 'Không có chức vụ!');
        }

        return view('admins.chucvu.edit',compact('chucvu'));
    }
    public function update(Request $request, string $id){
        if($request->isMethod('PUT')){
            $params = $request->except('_token','_method');
            
            $this->chuc_vu->updateChucVu($id, $params  );
            return redirect()->route('chucvu.index')->with('success', 'cập nhật chức vụ thành công!');

        }

    }
}

