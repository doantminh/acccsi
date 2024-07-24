@extends('layouts.admin')

@section('css')

@endsection

@section('content' )
<div class="my-5">
    {{-- Hiển thị thông báo --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-hover table-dark" style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>tên sản phẩm</th>
            <th>Hinh ảnh</th>
            <th>số lượng</th>
            <th>giá sản phẩm</th>
            <th>giá khuyến mại</th>
            <th>ngày nhập</th>
            <th>mô tả</th>
            <th>danh mục</th>
            <th>trạng thái</th>
            <th>
                <a href="{{ route('sanpham.create') }}" class="btn btn-outline-primary" style="width: 110px; ">
                    <i data-feather="plus-circle"></i>
                    <span> Thêm </span>
                </a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($sanpham as $i => $sanpham) : ?>
                <tr>
                    <td>{{$i + 1}}</td>
                    <td>{{$sanpham->ten_san_pham}}</td>
                    <td>
                        <img src="{{Storage::url($sanpham->hinh_anh)}}" width="100px" alt="ảnh đại diện">
                    </td>
                    <td>{{$sanpham->so_luong}}</td>
                    <td>{{$sanpham->gia_san_pham}}</td>
                    <td>{{$sanpham->gia_khuyen_mai}}</td>
                    <td>{{$sanpham->ngay_nhap}}</td>
                    <td>{{$sanpham->mo_ta}}</td>
                    <td>{{$sanpham->danh_muc_id}}</td>
                    <td>{{$sanpham->trang_thai == 1 ? 'còn hàng' : 'hết hàng' }}</td>
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    @endsection

    @section('js')

    @endsection