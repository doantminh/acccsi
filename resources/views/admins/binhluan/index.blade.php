@extends('layouts.admin')


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
    
    <table class="table table-hover table-dark ">
        <thead class="table-primary">
            <th>ID</th>
            <th>Tài Khoản</th>
            <th>Sản phẩm</th>
            <th>Nội dung</th>
            <th>Thời gian</th>
            <th>
                <a href="{{ route('binhluan.create') }}" class="btn btn-outline-primary" style="width: 110px; ">Thêm</a>
            </th>
        </thead>
        <tbody>
        <?php foreach ($binhluan as $binhluan) : ?>
                <tr>
                    <td>{{$binhluan->id}}</td>
                    <td>{{$binhluan->tai_khoan_id}}</td>
                    <td>{{$binhluan->san_pham_id}}</td>
                    <td>{{$binhluan->noi_dung}}</td>
                    <td>{{$binhluan->thoi_gian}}</td>
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

@section('js')

@endsection