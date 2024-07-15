@extends('layouts.admin')

@section('css')

@endsection

@section('content'  )
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
            <th>ảnh đại diện</th>
            <th>họ và tên</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>giới tính</th>
            <th>địa chỉ</th>
            <th>chức vụ</th>
            <th>trạng thái</th>
            <th>
            <a href="{{ route('taikhoan.create') }}" class="btn btn-outline-primary" style="width: 110px; ">Thêm</a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($taikhoan as $taikhoan) : ?>
                <tr>
                    <td>{{$taikhoan->id}}</td>
                    <td>
                        <img src="{{Storage::url($taikhoan->anh_dai_dien)}}" width="100px" alt="ảnh đại diện">
                    </td>
                    <td>{{$taikhoan->ho_ten}}</td>
                    <td>{{$taikhoan->email}}</td>
                    <td>{{$taikhoan->so_dien_thoai}}</td>
                    <td>{{$taikhoan->gioi_tinh}}</td>
                    <td>{{$taikhoan->dia_chi}}</td>
                    <td>{{$taikhoan->chuc_vu_id}}</td>
                    <td>{{$taikhoan->trang_thai == 1 ? 'hoạt động' : 'không hoạt động' }}</td> 
                    <td>
                        
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

@section('js')

@endsection