<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <div class="container-fluid">
        <a class="navbar-brand fs-6" href="http://127.0.0.1:8000/admin">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('chucvu.index') }}">Chức vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('taikhoan.index') }}">Tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('danhmuc.index') }}">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('sanpham.index') }}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('binhluan.index') }}">Bình luận</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('donhang.index') }}">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('phuongthucthanhtoan.index') }}">Phương thức thanh toán</a>
                </li>

            </ul>
        </div>
        <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
    </div>
</nav>