@extends('layouts.admin')

@section('css')

@endsection

@section('title')
{{ $title }}
@endsection

@section('content' )
<div class="my-5">
    {{-- Hiển thị thông báo --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h4>{{ $title }}</h4>
    <form action="{{ route('user.index') }}" method="GET">
        <div class="input-group" style="width: 200px;">
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
            <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
        </div>
    </form>
    <table class="table table-hover table-dark" style="text-align: center;">
        <thead class="table-primary">
            <th>STT</th>
            <th>ảnh đại diện</th>
            <th>họ và tên</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>giới tính</th>
            <th>địa chỉ</th>
            <th>chức vụ</th>
            <th>trạng thái</th>
            <th>
                <a href="{{ route('user.create') }}" class="btn btn-outline-primary" style="width: 110px; ">
                    <i data-feather="plus-circle"></i>
                    <span> Thêm </span>
                </a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($listUser as $index => $user) : ?>
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>
                        <img src="{{Storage::url($user->anh_dai_dien)}}" width="100px" alt="ảnh đại diện">
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->so_dien_thoai}}</td>
                    <td>{{$user->gioi_tinh}}</td>
                    <td>{{$user->dia_chi}}</td>
                    <td>{{$user->chuc_vu_id}}</td>
                    <td>{{$user->trang_thai == 1 ? 'hoạt động' : 'không hoạt động' }}</td>
                    <td>
                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-outline-primary" style="width: 50px; ">
                            <i data-feather="edit"></i>
                        </a>

                        <form action="{{ route('user.destroy',$user->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Bạn có đồng ý xóa hay không?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-primary" style="width: 50px; ">
                                <i data-feather="trash-2"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    {{ $listUser->links('pagination::bootstrap-5') }}
    @endsection

    @section('js')

    @endsection