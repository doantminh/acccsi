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
        <form action="{{ route('sanpham.update',$sanpham->id) }}" method="POST" enctype="multipart/form-data">
            {{-- Làm việc với Form trong Laravel --}}
            {{--
                    CSRF Field: Là một trường ẩn mà Laravel bắt buộc nhúng vào form
                                cho mục đích bảo mật, bảo vệ website
                --}}
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">mã sản phẩm:</label>
                        <input type="text" class="form-control @error('ma_sp') is-invalid @enderror" name="ma_sp" placeholder="Nhập mã sản phẩm" value="{{$sanpham->ma_sp}}">
                        @error('ma_sp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">tên sản phẩm:</label>
                        <input type="text" class="form-control @error('ten_san_pham') is-invalid @enderror" name="ten_san_pham" placeholder="Nhập tên sản phẩm" value="{{$sanpham->ten_san_pham}}">
                        @error('ten_san_pham')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số lượng:</label>
                        <input type="number" class="form-control @error('so_luong') is-invalid @enderror" name="so_luong" placeholder="Nhập số lượng" value="{{$sanpham->so_luong}}">
                        @error('so_luong')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">giá sản phẩm:</label>
                        <input type="number" class="form-control @error('gia_san_pham') is-invalid @enderror" name="gia_san_pham" placeholder="nhập giá sản phẩm" value="{{$sanpham->gia_san_pham}}">
                        @error('gia_san_pham')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá khuyễn mãi:</label>
                        <input type="number" class="form-control @error('gia_khuyen_mai') is-invalid @enderror" name="gia_khuyen_mai" placeholder="Nhập giá khuyễn mãi" value="{{$sanpham->gia_khuyen_mai}}">
                        @error('gia_khuyen_mai')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ngày nhập:</label>
                        <input type="date" class="form-control @error('ngay_nhap') is-invalid @enderror" name="ngay_nhap" placeholder="Nhập ngày nhập" value="{{$sanpham->ngay_nhap}}">
                        @error('ngay_nhap')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="mb-3">
                        <label class="form-label">Mô tả:</label>
                        <textarea class="form-control @error('mo_ta') is-invalid @enderror" aria-label="With textarea" name="mo_ta">{{$sanpham->mo_ta}}</textarea>
                        @error('mo_ta')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Danh Mục:</label>
                        <select class="form-select @error('danh_muc_id') is-invalid @enderror" name="danh_muc_id">
                            <option selected>Danh Mục</option>
                            <?php foreach ($danhmuc as $danhmuc) : ?>
                                <option value="{{$danhmuc->id}}" {{ $sanpham->danh_muc_id == $danhmuc->id ? 'selected' : '' }}>
                                    {{$danhmuc->ten_danh_muc}}
                                </option>
                            <?php endforeach; ?>
                        </select>
                        @error('danh_muc_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ảnh sản phẩm:</label>
                        <input type="file" class="form-control @error('hinh_anh') is-invalid @enderror" name="hinh_anh" placeholder="Nhập hình ảnh" onchange="showImage(event)">
                        <img id="image" src="{{Storage::url($sanpham->hinh_anh)}}" alt="hình ảnh danh mục" style="width: 200px; ">
                        @error('hinh_anh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="hinh_anh" class="form-label">Album hình ảnh</label>
                        <i id="add-row" class="mdi mdi-plus text-muted fs-18 rounded-2 border ms-3 p-1" style="cursor: pointer"></i>
                        <table class="table align-middle table-nowrap mb-0">
                            <tbody id="image_table_body">
                                <?php foreach ($hinhanhsp as $index => $hinhAnh) : ?>
                                    <tr>
                                        <td class="d-flex algin-items-center">
                                            <img id="preview_{{$index}}" src="{{Storage::url($hinhAnh->hinh_anh)}}" alt="hình ảnh danh mục" style="width: 50px;" class="me-3">
                                            <input type="file" class="form-control" name="list_hinh_anh[{{$hinhAnh->id}}]" onchange="previewImage(this, {{$index}} )">
                                            <input type="hidden" name="list_hinh_anh[{{$hinhAnh->id}}]" value="{{$hinhAnh->id}}">
                                        </td>
                                        <td>
                                            <i class="mdi mdi-delete text-muted fs-18 rounded-2 border ms-3 p-1" style="cursor: pointer" onclick="removeRow(this)"></i>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                <button type="submit" class="btn btn-success">Save</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rowCount = {{count($hinhanhsp)}} ;

        document.getElementById('add-row').addEventListener('click', function() {
            var tableBody = document.getElementById('image_table_body');
            var newRow = document.createElement('tr');

            newRow.innerHTML = `
            <td class="d-flex algin-items-center">
                <img id="preview_${rowCount}" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0Wr3oWsq6KobkPqznhl09Wum9ujEihaUT4Q&s" alt="hình ảnh danh mục" style="width: 50px;" class="me-3">
                <input type="file" class="form-control" name="list_hinh_anh[id_${rowCount}]" onchange="previewImage(this, ${rowCount})">
            </td>
            <td>
                <i class="mdi mdi-delete text-muted fs-18 rounded-2 border ms-3 p-1" style="cursor: pointer" onclick="removeRow(this)"></i>
            </td>
            `;

            tableBody.appendChild(newRow);
            rowCount++;
        })
    })

    function previewImage(input, rowIndex) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById(`preview_${rowIndex}`).setAttribute('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0])
        }
    }

    function removeRow(item) {
        var row = item.closest('tr');
        row.remove();
    }
</script>
@endsection