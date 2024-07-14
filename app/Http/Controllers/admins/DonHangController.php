<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    public function index(){
        $donhang = DB::table('don_hangs')->get();
        return view('admins.donhang.index',['donhang'=>$donhang]);
    }
}
