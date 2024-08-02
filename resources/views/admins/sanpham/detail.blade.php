@extends('layouts.admin')
@section('title')
{{ $title }}
@endsection
@section('css')

@endsection

@section('content' )
{{-- Hiển thị thông báo --}}
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chi tiết sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .product-image {
      height: 400px;
      object-fit: cover;
    }
    .thumbnail-container {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    .thumbnail {
      width: 100px;
      height: 100px;
      object-fit: cover;
      cursor: pointer;
      margin: 0 5px;
      border: 2px solid transparent;
    }
    .thumbnail:hover, .thumbnail.active {
      border-color: #007bff;
    }
  </style>
</head>
<body>
<div class="container mt-5 fs-5">
    <h1 class="p-3">{{ $title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{Storage::url($sanpham->hinh_anh)}}" class="d-block w-100 product-image" alt="Image 1">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="thumbnail-container" >
                <?php foreach($hinhanhsp as $hinhanhsp) : ?>
                <img src="{{Storage::url($hinhanhsp->hinh_anh)}}" class="thumbnail" alt="Image 1">
                <?php endforeach ?>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold">{{$sanpham->ten_san_pham}}</h1>
            <p class="text-danger fw-bolder" id="">Mã: {{$sanpham->ma_sp}}</p>
            <p>Danh mục:
                <?php foreach ($danhmuc as $danhmuc) : ?>
                    {{ $sanpham->danh_muc_id == $danhmuc->id ? $danhmuc->ten_danh_muc : '' }}
                <?php endforeach; ?>
            </p>
            <h4 class="text-danger fw-bolder">{{number_format($sanpham->gia_khuyen_mai)}} VND</h4>
            <p class="text " id="">Giá gốc: {{number_format($sanpham->gia_san_pham)}} VND</p>
            <p id="">{{$sanpham->mo_ta}}</p>
            <p>Số lượng: {{$sanpham->so_luong}}</p>
        </div>
    </div>
</div>

<hr>
<div class="container mt-5">
    <h1>Bình luận</h1>
    <!-- //mở foreach để đổ dữ liệu -->
    <div>
        <table class="table table-hover">
            <tr>
                <td>STT</td>
                <td>Người dùng</td>
                <td>Nội dung bình luận</td>
                <td>Ngày viết</td>
            </tr>
            <?php foreach ($binhluan as $index => $binhluan) : ?>
                <tr>
                    <td>{{$index+1}}</td>
                    <td>
                        {{ $binhluan->user_id }}
                    </td>
                    <td>{{$binhluan->noi_dung}}</td>
                    <td>{{$binhluan->thoi_gian}}</td>
                    
                </tr>
            <?php endforeach; ?>
    </div>
</div>
@endsection

@section('js')

@endsection
