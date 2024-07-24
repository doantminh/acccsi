{{-- extends dùng để kế thừa master layout --}}
@extends('layouts.admin')
@section('title')
{{ $title }}
@endsection

@section('css')
@endsection

@section('content')

    <div class="card my-5">
    <h4 class="p-3">{{ $title }}</h4>
        <div class="card-body">
            <form action="{{ route('danhmuc.update',$danhmuc->id) }}" method="POST" enctype="multipart/form-data">
                {{-- Làm việc với Form trong Laravel --}}
                {{-- 
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">tên danh mục:</label>
                    <input type="text" class="form-control" name="ten_danh_muc" placeholder="Nhập tên danh mục" value="{{$danhmuc->ten_danh_muc}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh:</label>
                    <input type="file" class="form-control" name="hinh_anh" placeholder="Nhập hình ảnh" onchange="showImage(event)">
                </div>
                <img id="image"  src="{{ Storage::url($danhmuc->hinh_anh) }}" alt="hình ảnh danh mục" style="width: 200px;">

                <div class="mb-3">
                    <label class="form-label">mô tả:</label>
                    <input type="text" class="form-control" name="mo_ta" placeholder="Nhập mô tả" value="{{$danhmuc->mo_ta}}">
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
