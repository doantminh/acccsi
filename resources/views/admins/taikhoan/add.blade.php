{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('taikhoan.store') }}" method="POST" enctype="multipart/form-data">
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
                <img id="image"  src="" alt="hình ảnh danh mục" style="width: 200px; display: none;">

                <div class="mb-3">
                    <label class="form-label">họ và tên:</label>
                    <input type="text" class="form-control" name="ho_ten" placeholder="Nhập họ tên">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" name="so_dien_thoai" placeholder="Nhập số điện thoại">
                </div>

                <div class="mb-3">
                    <label class="form-label">giới tính:</label>
                    <select name="gioi_tinh" class="form-select">
                        <option selected>Giới tính</option>
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">địa chỉ:</label>
                    <input type="text" class="form-control" name="dia_chi" placeholder="Nhập Địa chỉ">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" name="mat_khau" placeholder="Nhập Mật Khẩu">
                </div>

                <div class="mb-3">
                    <label class="form-label">Chức vụ:</label>
                    <select class="form-select" name="chuc_vu_id">
                                <option selected>Chức vụ</option>
                        <?php foreach($chucvu as $chucvu ) : ?>
                               <option value="{{$chucvu->id}}">
                                {{$chucvu->ten_chuc_vu}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">trạng thái:</label>
                    <select class="form-select" name="trang_thai">
                        <option selected>Trạng thái</option>
                        <option value="1">hoạt động</option>
                        <option value="0">không hoạt động</option>
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
    <script>
        function showImage(event){
            const image = document.getElementById('image');
            const file = event.target.files[0];
            const render = new FileReader();

            render.onload = function(){
                image.src = render.result;
                image.style.display = 'block';
            }
            if(file){
                render.readAsDataURL(file);
            }
        }
    </script> 
@endsection
