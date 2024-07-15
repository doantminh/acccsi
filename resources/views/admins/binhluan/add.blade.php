{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('binhluan.store') }}" method="POST" enctype="multipart/form-data">
                {{-- Làm việc với Form trong Laravel --}}
                {{-- 
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tài khoản:</label>
                    <select class="form-select" name="tai_khoan_id">
                                <option selected>Tài khoản</option>
                        <?php foreach($taikhoan as $taikhoan ) : ?>
                               <option value="{{$taikhoan->id}}">
                                {{$taikhoan->ho_ten}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sản phẩm:</label>
                    <select class="form-select" name="san_pham_id">
                                <option selected>sản phẩm</option>
                        <?php foreach($sanpham as $sanpham ) : ?>
                               <option value="{{$sanpham->id}}">
                                {{$sanpham->ten_san_pham}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">nội dung:</label>
                    <textarea class="form-control" aria-label="With textarea" name="noi_dung"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">thời gian:</label>
                    <input type="date" class="form-control" name="thoi_gian" placeholder="Nhập tên chức vụ">
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection

