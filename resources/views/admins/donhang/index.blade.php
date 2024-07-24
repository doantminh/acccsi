@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('css')

@endsection

@section('content')

    <div class="my-5">
        {{-- Hiển thị thông báo --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <h4>{{ $title }}</h4>
    <table class="table table-hover table-dark" style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>mã đơn hàng</th>
            <th>người dùng</th>
            <th>tên người nhận</th>
            <th>email người nhận</th>
            <th>SDT người nhận</th>
            <th>địa chỉ người nhận</th>
            <th>ngày đặt</th>
            <th>tổng tiền</th>
            <th>ghi chú</th>       
            <th>phương thúc thanh toán</th>
            <th>trạng thái</th>
            <th>
            <a href="{{ route('donhang.create') }}" class="btn btn-outline-primary" style="width: 110px; ">
            <i data-feather="plus-circle"></i>
            <span> Thêm </span>
            </a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($donhang as $i => $donhang) : ?>
                <tr>
                    <td>{{$i + 1}}</td>
                    <td>{{$donhang->ma_don_hang}}</td>
                    <td>{{$donhang->tai_khoan_id}}</td>
                    <td>{{$donhang->ten_nguoi_nhan}}</td>
                    <td>{{$donhang->email_nguoi_nhan}}</td>
                    <td>{{$donhang->so_dien_thoai_nguoi_nhan}}</td>
                    <td>{{$donhang->dia_chi_nguoi_nhan}}</td>
                    <td>{{$donhang->ngay_dat}}</td>
                    <td>{{$donhang->tong_tien}}</td>
                    <td>{{$donhang->ghi_chu}}</td>
                    <td>{{$donhang->phuong_thuc_thanh_toan_id}}</td>
                    <td>{{$donhang->trang_thai_don_hang_id }}</td> 
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

@section('js')

@endsection