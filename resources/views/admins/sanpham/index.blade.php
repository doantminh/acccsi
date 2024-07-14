@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark">
        <thead class="table-primary">
            <th>id</th>
            <th>tên sản phẩm</th>
            <th>số lượng</th>
            <th>giá sản phẩm</th>
            <th>giá khuyến mại</th>
            <th>ngày nhập</th>
            <th>mô tả</th>
            <th>danh mục</th>
            <th>trạng thái</th>
        </thead>
        <tbody>
            <?php foreach ($sanpham as $sanpham) : ?>
                <tr>
                    <td>{{$sanpham->id}}</td>
                    <td>{{$sanpham->ten_san_pham}}</td>
                    <td>{{$sanpham->so_luong}}</td>
                    <td>{{$sanpham->gia_san_pham}}</td>
                    <td>{{$sanpham->gia_khuyen_mai}}</td>
                    <td>{{$sanpham->ngay_nhap}}</td>
                    <td>{{$sanpham->mo_ta}}</td>
                    <td>{{$sanpham->danh_muc_id}}</td>
                    <td>{{$sanpham->trang_thai == 1 ? 'còn hàng' : 'hết hàng' }}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>