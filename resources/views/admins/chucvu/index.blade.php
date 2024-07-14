

@include('admins.index')

<div class="container p-4">
    
    <table class="table table-hover table-dark ">
        <thead class="table-primary">
            <th>ID</th>
            <th>tên chúc vụ</th>
            
        </thead>
        <tbody>
        <?php foreach ($chucvu as $chucvu) : ?>
                <tr>
                    <td>{{$chucvu->id}}</td>
                    <td>{{$chucvu->ten_chuc_vu}}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>