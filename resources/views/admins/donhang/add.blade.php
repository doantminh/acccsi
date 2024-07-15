{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('donhang.store') }}" method="POST" enctype="multipart/form-data">
                {{-- Làm việc với Form trong Laravel --}}
                {{-- 
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
                @csrf

                <div class="mb-3">
                    <label class="form-label">mã đơn hàng:</label>
                    <input type="text" class="form-control" name="ma_don_hang" placeholder="Nhập tên sản phẩm">
                </div>

                <div class="mb-3">
                    <label class="form-label">người đặt:</label>
                    <select class="form-select" name="tai_khoan_id">
                                <option selected>người đặt</option>
                        <?php foreach($taikhoan as $taikhoan ) : ?>
                               <option value="{{$taikhoan->id}}">
                                {{$taikhoan->ho_ten}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">tên người nhận:</label>
                    <input type="text" class="form-control" name="ten_nguoi_nhan" placeholder="Nhập tên người nhân">
                </div>

                <div class="mb-3">
                    <label class="form-label">email người nhận:</label>
                    <input type="email" class="form-control" name="email_nguoi_nhan" placeholder="nhập email người nhận">
                </div>

                <div class="mb-3">
                    <label class="form-label">số điện thoại người nhận:</label>
                    <input type="number" class="form-control" name="so_dien_thoai_nguoi_nhan" placeholder="Nhập số điện thoại người nhận">
                </div>

                <div class="mb-3">
                    <label class="form-label">Địa chỉ người nhận:</label>
                    <input type="text" class="form-control" name="dia_chi_nguoi_nhan" placeholder="Nhập địa chỉ người nhận">
                </div>

                <div class="mb-3">
                    <label class="form-label">ngày Đặt:</label>
                    <input type="date" class="form-control" name="ngay_dat" placeholder="Nhập ngày đặt">
                </div>

                <div class="mb-3">
                    <label class="form-label">tổng tiền:</label>
                    <input type="number" class="form-control" name="tong_tien" placeholder="tổng tiền">
                </div>

                <div class="mb-3">
                    <label class="form-label">ghi chú:</label>
                    <textarea class="form-control" aria-label="With textarea" name="ghi_chu"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phương thức thanh toán:</label>
                    <select class="form-select" name="phuong_thuc_thanh_toan_id">
                                <option selected>Phương thức thanh toán</option>
                        <?php foreach($pttt as $pttt ) : ?>
                               <option value="{{$pttt->id}}">
                                {{$pttt->ten_phuong_thuc}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">trạng thái:</label>
                    <select class="form-select" name="trang_thai_don_hang_id">
                                <option selected>trạng thái</option>
                        <?php foreach($trangthai as $trangthai ) : ?>
                               <option value="{{$trangthai->id}}">
                                {{$trangthai->ten_trang_thai}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="mb-3 d-flex justify-content-center">
                    <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
