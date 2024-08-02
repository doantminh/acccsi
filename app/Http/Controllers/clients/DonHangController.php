<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Mail\orderConfirm;
use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donhang = Auth::user()->donHang;
        $trangThai = DonHang::TRANG_THAI_DON_HANG;
        return view('clients.donhang.index',compact('donhang','trangThai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cart = session()->get('cart', []);
        if (!empty($cart)) {
            $total = 0;
            $subTotal = 0;

            foreach ($cart as $item) {
                $subTotal += $item['gia_san_pham'] * $item['so_luong'];
            }

            $shipping = 30000;
            $total = $subTotal + $shipping;
            return view('clients.donhang.add', compact('cart', 'total', 'subTotal', 'shipping'));
        }
        return redirect()->route('cart.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $params = $request->except('_token');
                $params['ma_don_hang'] = $this->generateUniqueOrderCode();
                
                $donhang = DonHang::query()->create($params);
                
                $donhangid = $donhang->id;
                $cart = session()->get('cart', []);
                
                DB::commit();

                Mail::to($donhang->email_nguoi_nhan)->queue(new orderConfirm($donhang));

                session()->put('cart', []);
                
                return redirect()->route('order.index')->with('success', 'Đơn hàng đã được tại thành công!');

            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->route('cart.list')->with('error', 'có lỗi khi tạo đơn hàng. vui lòng thử lại sau');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donhang = DonHang::query()->findOrFail($id);
        $trangThaidh = DonHang::TRANG_THAI_DON_HANG;
        $trangThaitt = DonHang::TRANG_THAI_THANH_TOAN;


        return view('clients.donhang.detail',compact('trangThaidh','donhang','trangThaitt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function generateUniqueOrderCode()
    {
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());
        return $orderCode;
    }
}
