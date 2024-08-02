<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function listCart()
    {
        $cart = session()->get('cart', []);

        $total = 0;
        $subTotal = 0;

        foreach ($cart as $item) {
            $subTotal += $item['gia_san_pham'] * $item['so_luong'];
        }

        $shipping = 30000;
        $total = $subTotal + $shipping;
        return view('clients.giohang', compact('cart','total','subTotal','shipping'));
    }
    public function addCart(Request $request)
    {
        $producId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $sanpham = SanPham::query()->findOrFail($producId);
        $cart = session()->get('cart', []);

        if (isset($cart[$producId])) {
            $cart[$producId]['so_luong'] += $quantity;
        } else {
            $cart[$producId] = [
                'ten_san_pham' => $sanpham->ten_san_pham,
                'so_luong' => $quantity,
                'gia_san_pham' => isset($sanpham->gia_khuyen_mai) ? $sanpham->gia_khuyen_mai : $sanpham->gia_san_pham,
                'hinh_anh' => $sanpham->hinh_anh,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }
    public function updateCart(Request $request)
    {
        $cartNew = $request->input('cart',[]);
        session()->put('cart', $cartNew);
        return redirect()->back();
    }
}
