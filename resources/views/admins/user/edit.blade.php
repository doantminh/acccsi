{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
<div class="card my-5">
<h4 class="p-3">{{ $title }}</h4>
    <div class="card-body">
        <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            {{-- Làm việc với Form trong Laravel --}}
            {{--
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">ảnh đại diện:</label>
                <input type="file" class="form-control" name="anh_dai_dien" onchange="showImage(event)">
            </div>
            <img id="image" src="{{Storage::url($user->anh_dai_dien)}}" alt="hình ảnh user" style="width: 200px; ">

            <div class="mb-3">
                <label class="form-label">họ và tên:</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" value="{{$user->name}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="email" value="{{$user->email}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Số điện thoại:</label>
                <input type="number" class="form-control" name="so_dien_thoai" placeholder="Nhập số điện thoại" value="{{$user->so_dien_thoai}}">
            </div>

            <div class="mb-3">
                <label class="form-label">giới tính:</label>
                <select name="gioi_tinh" class="form-select" value="{{$user->gioi_tinh}}">
                    <option selected>Giới tính</option>
                    <option value="1" {{ $user->gioi_tinh == '1' ? 'selected' : '' }}>Nam</option>
                    <option value="0" {{ $user->gioi_tinh == '0' ? 'selected' : '' }}>Nữ</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">địa chỉ:</label>
                <input type="text" class="form-control" name="dia_chi" placeholder="Nhập Địa chỉ" value="{{$user->dia_chi}}">
            </div>

            <!-- <div class="mb-3">
                <label class="form-label">Chức vụ:</label>
                <select class="form-select" name="chuc_vu_id">
                    <option selected>Chức vụ</option>
                    <?php foreach ($chucvu as $chucvu) : ?>
                        <option value="{{$chucvu->id}}" {{ $user->chuc_vu_id == $chucvu->id ? 'selected' : '' }}>
                            {{$chucvu->ten_chuc_vu}}
                        </option>
                    <?php endforeach; ?>
                </select>
            </div> -->

            <div class="mb-3">
                <label class="form-label">trạng thái:</label>
                <select class="form-select" name="trang_thai" value="{{$user->trang_thai}}">
                    <option selected>Trạng thái</option>
                    <option value="1" {{ $user->trang_thai == '1' ? 'selected' : '' }}>hoạt động</option>
                    <option value="0" {{ $user->trang_thai == '0' ? 'selected' : '' }}>không hoạt động</option>
                </select>
            </div>

            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                <button type="submit" class="btn btn-success">
                    <i data-feather="save"></i>
                    <span> Save </span>
                </button>
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