<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrangChuController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        $listsanpham = SanPham::query()
            ->when($search, function ($query, $search) {
                return $query
                        ->where('ten_san_pham', 'like', "%{$search}%");
            })
            ->paginate(12);
        $danhmuc = DB::table('danh_mucs')->get();
        return view('clients.index',compact('listsanpham','danhmuc'));
    }
}
