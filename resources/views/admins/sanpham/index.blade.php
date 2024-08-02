@extends('layouts.admin')
@section('title')
{{ $title }}
@endsection
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
    <h4 class="p-3">{{ $title }}</h4>
    <form action="{{ route('sanpham.index') }}" method="GET">
        <div class="input-group" style="width: 400px;">
            <select class="form-select" name="danh_muc_id">
                <option value="" selected>Danh Mục</option>
                <?php foreach ($danhmuc as $danhmuc) : ?>
                    <option value="{{$danhmuc->id}}" >
                        {{$danhmuc->ten_danh_muc}}
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
            <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
        </div>
    </form>
    <table class="table table-hover table-dark" style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>tên sản phẩm</th>
            <th>Hinh ảnh</th>
            <th>số lượng</th>
            <th>giá sản phẩm</th>
            <th>trạng thái</th>
            <th></th>
            <th>
                <a href="{{ route('sanpham.create') }}" class="btn btn-outline-primary" style="width: 110px; ">
                    <i data-feather="plus-circle"></i>
                    <span> Thêm </span>
                </a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($listSanPham as $i => $sanpham) : ?>
                <tr>
                    <td>{{$i + 1}}</td>
                    <td>{{$sanpham->ten_san_pham}}</td>
                    <td>
                        <img src="{{Storage::url($sanpham->hinh_anh)}}" width="100px" alt="ảnh đại diện">
                    </td>
                    <td>{{$sanpham->so_luong}}</td>
                    <td>{{number_format($sanpham->gia_khuyen_mai)}}</td>
                    <td>{{$sanpham->trang_thai == 1 ? 'còn hàng' : 'hết hàng' }}</td>
                    <td>
                        <a href="{{ route('sanpham.show',$sanpham->id) }}" class="btn btn-primary d-inline" style="width: 50px; ">chi tiết</a>
                    </td>
                    <td>
                        <a href="{{ route('sanpham.edit',$sanpham->id) }}" class="btn btn-dark" style="width: 50px; ">
                            <i data-feather="edit"></i>
                        </a>

                        <form action="" class="d-inline" method="POST" onsubmit="return confirm('Bạn có đồng ý xóa hay không?')">
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
    {{ $listSanPham->links('pagination::bootstrap-5') }}
    @endsection

    @section('js')

    @endsection