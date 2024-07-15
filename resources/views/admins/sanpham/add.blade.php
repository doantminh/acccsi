{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')


@section('css')
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                {{-- Làm việc với Form trong Laravel --}}
                {{-- 
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
                @csrf

                <div class="mb-3">
                    <label class="form-label">tên sản phẩm:</label>
                    <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên sản phẩm">
                </div>

                <div class="mb-3">
                    <label class="form-label">ảnh đại diện:</label>
                    <input type="file" class="form-control" name="hinh_anh" placeholder="Nhập hình ảnh" onchange="showImage(event)">
                </div>
                <img id="image"  src="" alt="hình ảnh danh mục" style="width: 200px; display: none;">

                <div class="mb-3">
                    <label class="form-label">Số lượng:</label>
                    <input type="number" class="form-control" name="so_luong" placeholder="Nhập số lượng">
                </div>

                <div class="mb-3">
                    <label class="form-label">giá sản phẩm:</label>
                    <input type="number" class="form-control" name="gia_san_pham" placeholder="nhập giá sản phẩm">
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá khuyễn mãi:</label>
                    <input type="number" class="form-control" name="gia_khuyen_mai" placeholder="Nhập giá khuyễn mãi">
                </div>

                <div class="mb-3">
                    <label class="form-label">ngày nhập:</label>
                    <input type="date" class="form-control" name="ngay_nhap" placeholder="Nhập ngày nhập">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả:</label>
                    <textarea class="form-control" aria-label="With textarea" name="mo_ta"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh Mục:</label>
                    <select class="form-select" name="danh_muc_id">
                                <option selected>Danh Mục</option>
                        <?php foreach($danhmuc as $danhmuc ) : ?>
                               <option value="{{$danhmuc->id}}">
                                {{$danhmuc->ten_danh_muc}}
                               </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">trạng thái:</label>
                    <select class="form-select" name="trang_thai">
                        <option selected>Trạng thái</option>
                        <option value="1">còn hàng</option>
                        <option value="0">hết hàng</option>
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
