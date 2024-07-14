@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark">
        <thead class="table-primary">
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên danh mục</th>
            <th>Mô tả</th>
            
            <th>
            </th>
        </thead>
        <tbody>
            <?php foreach ($danhmuc as $danhmuc) : ?>
                <tr>
                    <td>{{$danhmuc->id}}</td>
                    <td>{{$danhmuc->hinh_anh}}</td>
                    <td>{{$danhmuc->ten_danh_muc}}</td>
                    <td>{{$danhmuc->mo_ta}}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>