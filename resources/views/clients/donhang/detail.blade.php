@extends('layouts.client')

@section('css')

@endsection

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi tiết đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .product-image {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h4 id="orderID">Mã Đơn Hàng: {{$donhang->ma_don_hang}}</h4>
                <p class="text-muted" id="orderDate">Ngày đặt hàng: {{$donhang->ngay_dat}}</p>
                <p class="text-muted" id="orderDate">Tên nhận hàng: {{$donhang->ten_nguoi_nhan}}</p>
                <p class="text-muted" id="orderDate">eamil nhận hàng: {{$donhang->email_nguoi_nhan}}</p>
                <p class="text-muted" id="orderDate">số điện thoại người nhận hàng: {{$donhang->so_dien_thoai_nguoi_nhan}}</p>
                <p class="text-muted" id="orderDate">Dịa chỉ người nhận hàng: {{$donhang->dia_chi_nguoi_nhan}}</p>
                <h4 class="text-danger" id="orderTotal">Tiền hàng: {{number_format($donhang->tien_hang)}} đ</h4>
                <h4 class="text-danger" id="orderTotal">Tổng ship: {{number_format($donhang->tien_ship)}} đ</h4>
                <h4 class="text-danger" id="orderTotal">Tổng số tiền: {{number_format($donhang->tong_tien)}} đ</h4>
                <p id="orderStatus">Trạng thái đơn hàng: {{$trangThaidh[$donhang->tran_thai_don_hang]}}</p>
                <p id="orderStatus">Trạng thái thanh toán: {{$trangThaitt[$donhang->tran_thai_thanh_toan]}}</p>
                <div class="mb-3">
                    <label for="orderNote" class="form-label">Ghi chú đơn hàng</label>
                    <textarea id="orderNote" class="form-control" rows="3">{{$donhang->ghi_chu}}</textarea>
                </div>
                <button class="btn btn-primary" onclick="updateOrder()">Cập nhật đơn hàng</button>
                <button class="btn btn-danger" onclick="cancelOrder()">Hủy đơn hàng</button>
            </div>
        </div>

        <hr>

        <h2 class="mt-5">Chi tiết sản phẩm</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="https://picsum.photos/150" class="product-image" alt="Product 1"></td>
                            <td>Sản Phẩm 1</td>
                            <td>2</td>
                            <td>$99.99</td>
                            <td>$199.98</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="https://picsum.photos/150?grayscale" class="product-image" alt="Product 2"></td>
                            <td>Sản Phẩm 2</td>
                            <td>1</td>
                            <td>$99.99</td>
                            <td>$99.99</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function updateOrder() {
            alert('Cập nhật đơn hàng thành công!');
            // Thêm mã JavaScript để cập nhật đơn hàng
        }

        function cancelOrder() {
            if (confirm('Bạn có chắc chắn muốn hủy đơn hàng này không?')) {
                alert('Đơn hàng đã được hủy.');
                // Thêm mã JavaScript để hủy đơn hàng
            }
        }
    </script>
    @endsection
    @section('js')
    @endsection