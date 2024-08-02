@extends('layouts.client')


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

    <table class="table table-hover " style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>mã đơn hàng</th>
            <th>Ngày đặt</th>
            <th>tổng tiền</th>
            <th>Trạng thái</th>
            <th></th>
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
                        <a href="{{ route('order.show',$donhang->id) }}" class="" style="width: 110px; ">
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