<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChucVuController extends Controller
{
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
}

