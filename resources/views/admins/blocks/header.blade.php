<!-- Topbar Start -->
<div class="topbar-custom">
    <div class="container-xxl">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link ps-0">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <div class="position-relative topbar-search">
                        <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                        <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                <li class="d-none d-sm-flex">
                    <button type="button" class="btn nav-link" data-toggle="fullscreen">
                        <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                    </button>
                </li>

                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ Storage::url(Auth::user()->anh_dai_dien)  }}" alt="image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                    {{Auth::user()->name}}
                    </span>
                </a>

                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn">
                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                    </button>
                </form>
            </ul>
        </div>

    </div>

</div>
<!-- end Topbar -->