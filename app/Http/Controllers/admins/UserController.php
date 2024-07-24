<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public $user;
    public function __construct() {
        $this->user = new User();
    }
    public function index(Request $request){
        $search = $request->input('search');

        $listUser = User::query()
            ->when($search, function ($query, $search) {
                return $query
                        ->where('name', 'like', "%{$search}%");
            })->paginate(5);
        $title = 'Danh sách tài khoản';
        return view('admins.user.index',compact('listUser','title'));
    }
    public function create(){
        $title = 'Thêm mới tài khoản';
        $chucvu = DB::table('chuc_vus')->get();
        return view('admins.user.add',compact('chucvu','title'));
    }
    public function store(UserRequest $request) {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('anh_dai_dien')){
                $filename = $request->file('anh_dai_dien')->store('uploads/taikhoan','public');
            }
            else{
                $filename = null;
            }
            $params['anh_dai_dien'] = $filename;
            User::create($params);
            return redirect()->route('user.index')->with('success', 'Thêm tài khoản thành công!');
        }
    }
    public function edit(string $id){
        $title = 'Chỉnh sửa tài khoản';
        $user = User::query()->findOrFail($id);
        $chucvu = DB::table('chuc_vus')->get();
        return view('admins.user.edit',compact('user','chucvu','title'));
    }
    public function update(Request $request, string $id){
        if ($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            $user = User::query()->findOrFail($id);

            if ($request->hasFile('anh_dai_dien')) {
                if ($user->anh_dai_dien && Storage::disk('public')->exists($user->anh_dai_dien)) {
                    Storage::disk('public')->delete($user->anh_dai_dien);
                }
                $params['anh_dai_dien'] = $request->file('anh_dai_dien')->store('uploads/taikhoan','public');
            }else {
                $params['anh_dai_dien'] = $user->anh_dai_dien;
            }
            $this->user->updateUser($id,$params);
            return redirect()->route('user.index')->with('success', 'Sửa thông tin thành công!');
        }
    }
    public function destroy(string $id){
        $user = User::query()->findOrFail($id);
        if ($user) {
            $user->delete();

            if ($user->hinh_anh && Storage::disk('public')->exists($user->hinh_anh)) {
                Storage::disk('public')->delete($user->hinh_anh);
            }

            return redirect()->route('user.index')->with('success', 'Xóa sản phẩm thành công!');
        }
    }
}
