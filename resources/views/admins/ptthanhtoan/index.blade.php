

@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark ">
        <thead class="table-primary">
            <th>ID</th>
            <th>tên phương thức</th>
            
        </thead>
        <tbody>
        <?php foreach ($ptthanhtoan as $ptthanhtoan) : ?>
                <tr>
                    <td>{{$ptthanhtoan->id}}</td>
                    <td>{{$ptthanhtoan->ten_phuong_thuc}}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>