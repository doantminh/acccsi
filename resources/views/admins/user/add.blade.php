{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
<div class="card my-5">
<h4 class="p-3">{{ $title }}</h4>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            {{-- Làm việc với Form trong Laravel --}}
            {{--
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
            @csrf

            <div class="mb-3">
                <label class="form-label">ảnh đại diện:</label>
                <input type="file" class="form-control" name="anh_dai_dien" placeholder="Nhập hình ảnh" onchange="showImage(event)">
            </div>
            <img id="image" src="" alt="hình ảnh danh mục" style="width: 200px; display: none;">

            <div class="mb-3">
                <label class="form-label">họ và tên:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập họ tên">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Số điện thoại:</label>
                <input type="number" class="form-control @error('so_dien_thoai') is-invalid @enderror" name="so_dien_thoai" placeholder="Nhập số điện thoại">
                @error('so_dien_thoai')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">giới tính:</label>
                <select name="gioi_tinh" class="form-select @error('gioi_tinh') is-invalid @enderror">
                    <option selected>Giới tính</option>
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
                @error('gioi_tinh')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">địa chỉ:</label>
                <input type="text" class="form-control @error('dia_chi') is-invalid @enderror" name="dia_chi" placeholder="Nhập Địa chỉ">
                @error('dia_chi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Nhập Mật Khẩu">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- <div class="mb-3">
                <label class="form-label">Chức vụ:</label>
                <select class="form-select @error('chuc_vu_id') is-invalid @enderror" name="chuc_vu_id">
                    <option selected>Chức vụ</option>
                    <?php foreach ($chucvu as $chucvu) : ?>
                        <option value="{{$chucvu->id}}">
                            {{$chucvu->ten_chuc_vu}}
                        </option>
                    <?php endforeach; ?>
                </select>
                @error('chuc_vu_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> -->

            <div class="mb-3">
                <label class="form-label">trạng thái:</label>
                <select class="form-select @error('trang_thai') is-invalid @enderror" name="trang_thai">
                    <option selected>Trạng thái</option>
                    <option value="1">hoạt động</option>
                    <option value="0">không hoạt động</option>
                </select>
                @error('trang_thai')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
<script>
    function showImage(event) {
        const image = document.getElementById('image');
        const file = event.target.files[0];
        const render = new FileReader();

        render.onload = function() {
            image.src = render.result;
            image.style.display = 'block';
        }
        if (file) {
            render.readAsDataURL(file);
        }
    }
</script>
@endsection