

@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark ">
        <thead class="table-primary">
            <th>ID</th>
            <th>Tài Khoản</th>
            <th>Sản phẩm</th>
            <th>Nội dung</th>
            <th>Thời gian</th>
            
        </thead>
        <tbody>
        <?php foreach ($binhluan as $binhluan) : ?>
                <tr>
                    <td>{{$binhluan->id}}</td>
                    <td>{{$binhluan->tai_khoan_id}}</td>
                    <td>{{$binhluan->san_pham_id}}</td>
                    <td>{{$binhluan->noi_dung}}</td>
                    <td>{{$binhluan->thoi_gian}}</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>