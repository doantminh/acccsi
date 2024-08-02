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
            <th>Ngày đặt</th>
            <th>tổng tiền</th>
            <th>Trạng thái</th>
            <th>

            </th>
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
                    <td>{{$donhang->ngay_dat}}</td>
                    <td>{{number_format($donhang->tong_tien)}}</td>
                    <td>{{$trangThai[$donhang->tran_thai_don_hang]}}</td>
                    <td>
                        <a href="{{ route('donhang.show',$donhang->id) }}" class="btn btn-outline-primary" style="width: 110px; ">
                            <span> Chi tiết </span>
                        </a>
                    </td>
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

    @section('js')

    @endsection