@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark">
        <thead class="table-primary">
            <th>id</th>
            <th>ảnh đại diện</th>
            <th>họ và tên</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>giới tính</th>
            <th>địa chỉ</th>
            <th>ngày sinh</th>
            <th>chức vụ</th>
            <th>trạng thái</th>
            <th>
            </th>
        </thead>
        <tbody>
            <?php foreach ($taikhoan as $taikhoan) : ?>
                <tr>
                    <td>{{$taikhoan->id}}</td>
                    <td>{{$taikhoan->anh_dai_dien}}</td>
                    <td>{{$taikhoan->ho_ten}}</td>
                    <td>{{$taikhoan->email}}</td>
                    <td>{{$taikhoan->so_dien_thoai}}</td>
                    <td>{{$taikhoan->gioi_tinh}}</td>
                    <td>{{$taikhoan->dia_chi}}</td>
                    <td>{{$taikhoan->ngay_sinh}}</td>
                    <td>{{$taikhoan->chuc_vu_id}}</td>
                    <td>{{$taikhoan->trang_thai == 1 ? 'admin' : 'khách hàng' }}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>