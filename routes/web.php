<?php

use App\Http\Controllers\admins\BinhLuanContrller;
use App\Http\Controllers\admins\ChucVuController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\HomeController;
use App\Http\Controllers\admins\PhuongThucThanhToanController;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\admins\TaiKhoanController;
use App\Models\DanhMuc;
use App\Models\PhuongThucThanhToan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [HomeController::class, 'index']);

Route::resource('chucvu', ChucVuController::class);

Route::resource('taikhoan', TaiKhoanController::class);

Route::resource('danhmuc', DanhMucController::class);

Route::resource('sanpham', SanPhamController::class);

Route::resource('binhluan', BinhLuanContrller::class);

Route::resource('donhang', DonHangController::class);

Route::resource('phuongthucthanhtoan', PhuongThucThanhToanController::class);


