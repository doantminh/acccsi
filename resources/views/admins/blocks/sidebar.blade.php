<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a class='logo logo-light' href='index.html'>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a class='logo logo-dark' href='index.html'>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">
                <li>
                    <a class="tp-link" href=" {{ route('admin.index') }} ">
                        <i data-feather="home"></i>
                        <span> Admin </span>
                    </a>
                </li>
                <li class="menu-title">Quản trị</li>

                <li>
                    <a class='tp-link' href='#'>
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>

                    <a class='tp-link' href=" {{ route('user.index') }} ">
                        <i data-feather="users"></i>
                        <span> Quản lý tài khoản </span>
                    </a>
                </li>

                <li class="menu-title">Kinh doanh</li>

                <li>
                    <a class='tp-link' href=" {{ route('danhmuc.index') }} ">
                        <i data-feather="align-center"></i>
                        <span> Danh mục </span>
                    </a>

                    <a class='tp-link' href=" {{ route('sanpham.index') }} ">
                        <i data-feather="package"></i>
                        <span> Sản phẩm </span>
                    </a>

                    <a class='tp-link' href=" {{ route('donhang.index') }} ">
                        <i data-feather="shopping-bag"></i>
                        <span> Đơn hàng </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>