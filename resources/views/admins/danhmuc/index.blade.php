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
    <table class="table table-hover table-dark">
        <thead class="table-primary">
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên danh mục</th>
            <th>Mô tả</th>
            <th>
            <a href="{{ route('danhmuc.create') }}" class="btn btn-outline-primary" style="width: 110px; ">Thêm</a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($danhmuc as $danhmuc) : ?>
                <tr>
                    <td>{{$danhmuc->id}}</td>
                    <td>
                        <img src="{{ Storage::url($danhmuc->hinh_anh) }}" width="100px" alt="hình ảnh danh mục">
                    </td>
                    <td>{{$danhmuc->ten_danh_muc}}</td>
                    <td>{{$danhmuc->mo_ta}}</td>
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

@section('js')

@endsection