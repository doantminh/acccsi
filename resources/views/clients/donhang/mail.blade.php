<x-mail::message>
# THông báo

Bạn đã thêm sản phẩm thành công.

Thông tin về sản phẩm: 
    - mã đơn hàng là: {{$donhang->ma_don_hang}}
    - tổng tiền là: {{$donhang->tong_tien}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>