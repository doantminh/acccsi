@extends('layouts.admin')


@section('css')

@endsection


@section('content')
    <div class="my-5">
        {{-- Hiển thị thông báo --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('erorr'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <table class="table table-hover table-dark ">
        <thead class="table-primary">
            <th>ID</th>
            <th>tên chúc vụ</th>
            <th>
                <a href="{{ route('chucvu.create') }}" class="btn btn-outline-primary" style="width: 110px; ">Thêm</a>
            </th>
        </thead>
        <tbody>
        <?php foreach ($chucvu as $chucvu) : ?>
                <tr>
                    <td>{{$chucvu->id}}</td>
                    <td>{{$chucvu->ten_chuc_vu}}</td>
                    <td>
                    <a href="{{ route('chucvu.edit',$chucvu->id) }}" class="btn btn-outline-primary" style="width: 50px; ">sửa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @endsection

@section('js')

@endsection