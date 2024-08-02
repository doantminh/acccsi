@extends('layouts.admin')


@section('css')

@endsection

@section('title')
{{ $title }}
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
    <table class="table table-hover table-dark " style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>hình ảnh</th>
            <th>tên danh mục</th>
            <th>Mô tả</th>
            <th>
                <a href="{{ route('danhmuc.create') }}" class="btn btn-outline-primary" style="width: 110px; ">
                    <i data-feather="plus-circle"></i>
                    <span> Thêm </span>
                </a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($listdanhmuc as $i => $danhmuc) : ?>
                <tr>
                    <td>{{$i + 1}}</td>
                    <td>
                        <img src="{{ Storage::url($danhmuc->hinh_anh) }}" width="100px" alt="hình ảnh danh mục">
                    </td>
                    <td>{{$danhmuc->ten_danh_muc}}</td>
                    <td>{{$danhmuc->mo_ta}}</td>
                    <td>
                        <a href="{{ route('danhmuc.edit',$danhmuc->id) }}" class="btn btn-dark" style="width: 50px; ">
                            <i data-feather="edit"></i>
                        </a>

                        <form action="{{ route('danhmuc.destroy',$danhmuc->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Bạn có đồng ý xóa hay không?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark" style="width: 50px; ">
                                <i data-feather="trash-2"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    {{ $listdanhmuc->links('pagination::bootstrap-5') }}
    @endsection

    @section('js')

    @endsection