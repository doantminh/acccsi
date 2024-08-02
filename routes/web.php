<?php

use App\Http\Controllers\admins\BinhLuanContrller;
use App\Http\Controllers\admins\ChucVuController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\HomeController;
use App\Http\Controllers\admins\PhuongThucThanhToanController;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\admins\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\clients\CartController;
use App\Http\Controllers\clients\DonHangController as ClientsDonHangController;
use App\Http\Controllers\clients\SanPhamController as ClientsSanPhamController;
use App\Http\Controllers\clients\TrangChuController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
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

Route::middleware('auth')->group(function () {
    Route::middleware('auth.admin')->group(function () {
        Route::resource('admin', HomeController::class);

        Route::resource('chucvu', ChucVuController::class);

        Route::resource('user', UserController::class);

        Route::resource('danhmuc', DanhMucController::class);

        Route::resource('sanpham', SanPhamController::class);

        Route::resource('binhluan', BinhLuanContrller::class);

        Route::resource('donhang', DonHangController::class);

        Route::resource('phuongthucthanhtoan', PhuongThucThanhToanController::class);
    });
    Route::resource('order', ClientsDonHangController::class);
    Route::get('list-cart', [CartController::class, 'listCart'])->name('cart.list');
    Route::post('add-to-cart', [CartController::class, 'addCart'])->name('cart.add');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
});




Route::resource('home', TrangChuController::class);

Route::resource('product', ClientsSanPhamController::class);


Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
