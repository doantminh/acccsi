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
    
    <div class="container mt-5 fs-5">
    <h1 class="p-3">{{ $title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{Storage::url($user->anh_dai_dien)}}" class="d-block w-100 product-image" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold">{{$user->ten_san_pham}}</h1>
            <p class="text-danger fw-bolder" id="">Họ và tên: {{$user->name}}</p>
            <p class="text " id="">Giới tinh: {{$user->gioi_tinh == 1 ? 'nam' : 'nữ'}} </p>
            <p id="">Địa chỉ: {{$user->dia_chi}}</p>
            <p id="">Email: {{$user->email}}</p>
            <p>Số điện thoại: {{$user->so_dien_thoai}}</p>
            <p>chức vụ:
                <?php foreach ($chucvu as $chucvu) : ?>
                    {{ $user->chuc_vu_id == $chucvu->id ? $chucvu->ten_chuc_vu : '' }}
                <?php endforeach; ?>
            </p>
        </div>
    </div>
</div>


    @endsection

    @section('js')

    @endsection