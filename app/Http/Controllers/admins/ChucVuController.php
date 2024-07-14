<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChucVuController extends Controller
{
    public function index(){
        $chucvu = DB::table('chuc_vus')->get();
        return view('admins.chucvu.index',['chucvu'=>$chucvu]);
    }
}

