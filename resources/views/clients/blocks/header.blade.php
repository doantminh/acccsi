<header id="header" class="header header-sticky header-sticky-smart disable-transition-all z-index-5">
    <div class="topbar">
        <div class="bg-primary overflow-hidden">
            <div class="pt-4 pb-3 text-white move-text-animate fw-semibold text-nowrap">
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
            </div>
        </div>
        <div class="border-bottom d-none d-lg-block">
            <div class="container-wide container py-2">
                <div class="row py-4">
                    <div class="w-70 d-flex align-items-center">
                        <span class="font-weight-normal pe-8">
                            <img src="{{ asset('assets/client/images/others/logo-daniel-removebg.png') }}" alt="flag-02" class="me-4" style="width:80px">
                            Ship to: <strong class="font-weight-500 text-secondary ps-3">VN</strong>
                        </span>
                        <span class="d-flex align-items-center pe-8"><svg class="icon me-4">
                                <use xlink:href="#mobile"></use>
                            </svg> Call: +84 399611702</span>
                        <span class="d-flex align-items-center"><svg class="icon me-4">
                                <use xlink:href="#envelope"></use>
                            </svg>thanhminhvilet@gamil.com</span>
                    </div>
                    <div class="icons-actions d-flex justify-content-end w-30 fs-28px text-body-emphasis">
                        @if(Auth::user())
                        <div class="px-6 d-inline-block">
                            <a class="lh-1 color-inherit text-decoration-none" href="#" >
                                <div class="icon icon-user-light">
                                <img src="{{ Storage::url(Auth::user()->anh_dai_dien)  }}" alt="image" class="rounded-circle" width="50px">
                                </div>
                            </a>
                        </div>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn">
                                    logout
                                </button>
                            </form>

                        @endif

                        <div class="px-6 me-n4 d-inline-block">
                            <a class="position-relative lh-1 color-inherit text-decoration-none" href="{{route('cart.list')}}" >
                                <svg class="icon icon-user-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                                <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" style="--square-size: 18px">{{session('cart')? count(session('cart')) : '0'  }}</span>
                            </a>
                        </div>
                        <div class="color-modes position-relative ps-5">
                            <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle" href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                                <svg class="bi my-1 theme-icon-active">
                                    <use href="#sun-fill"></use>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#moon-stars-fill"></use>
                                        </svg>
                                        Dark
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#circle-half"></use>
                                        </svg>
                                        Auto
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-area">
        <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0">
            <div class="container-wide container flex-nowrap">
                <div class="w-72px d-flex d-xl-none">
                    <button class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar" aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                </div>
                <div class="d-none d-xl-flex w-xl-50">
                    <ul class="navbar-nav">
                        <li class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle" href="index.html" data-bs-toggle="dropdown" id="menu-item-home" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth position-static">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle" href="store.html" data-bs-toggle="dropdown" id="menu-item-shop" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu mega-menu py-6" aria-labelledby="menu-item-shop">
                                <div class="megamenu-shop container-wide py-8 px-12">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="fs-18px">Shop Pages</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="shop/shop-layout-v1.html" class="border-hover text-decoration-none py-3 d-block"><span class="border-hover-target">Shop Layout <sup>v1</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="shop/shop-layout-v2.html" class="border-hover text-decoration-none py-3 d-block"><span class="border-hover-target">Shop Layout <sup>v2</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="shop/shop-layout-v3.html" class="border-hover text-decoration-none py-3 d-block"><span class="border-hover-target">Shop Layout <sup>v3</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="shop/shop-layout-v4.html" class="border-hover text-decoration-none py-3 d-block"><span class="border-hover-target">Shop Layout <sup>v4</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="shop/shop-layout-v5.html" class="border-hover text-decoration-none py-3 d-block"><span class="border-hover-target">Shop Layout <sup>v5</sup></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle" href="#" data-bs-toggle="dropdown" id="menu-item-pages" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu py-6" aria-labelledby="menu-item-pages">

                                <li class="dropdown-divider"></li>
                                <li class="dropend dropdown-hover" aria-haspopup="true" aria-expanded="false">
                                    <a class="dropdown-item pe-6 dropdown-toggle d-flex justify-content-between border-hover" href="#" data-bs-toggle="dropdown" id="menu-item-about-us">
                                        <span class="border-hover-target">
                                            About Us
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu py-6" aria-labelledby="menu-item-about-us" data-bs-popper="none">
                                        <li>
                                            <a class="dropdown-item border-hover" href="about-us-01.html">
                                                <span class="border-hover-target">About Us 01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="about-us-02.html">
                                                <span class="border-hover-target">About Us 02</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropend dropdown-hover" aria-haspopup="true" aria-expanded="false">
                                    <a class="dropdown-item pe-6 dropdown-toggle d-flex justify-content-between border-hover" href="#" data-bs-toggle="dropdown" id="menu-item-contact-us">
                                        <span class="border-hover-target">
                                            Contact us
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu py-6" aria-labelledby="menu-item-contact-us" data-bs-popper="none">
                                        <li>
                                            <a class="dropdown-item border-hover" href="contact-us-01.html">
                                                <span class="border-hover-target">Contact Us 01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="contact-us-02.html">
                                                <span class="border-hover-target">Contact Us 02</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropend dropdown-hover" aria-haspopup="true" aria-expanded="false">
                                    <a class="dropdown-item pe-6 dropdown-toggle d-flex justify-content-between border-hover" href="dashboard/dashboard.html" data-bs-toggle="dropdown" id="menu-item-dashboard">
                                        <span class="border-hover-target">
                                            Dashboard
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu py-6" aria-labelledby="menu-item-dashboard" data-bs-popper="none">
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/dashboard.html">
                                                <span class="border-hover-target">Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/product-grid.html">
                                                <span class="border-hover-target">Products</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/order-list.html">
                                                <span class="border-hover-target">Orders</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/sellers-cards.html">
                                                <span class="border-hover-target">Sellers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/add-product-1.html">
                                                <span class="border-hover-target">Add Product</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/transactions-1.html">
                                                <span class="border-hover-target">Transaction</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/reviews.html">
                                                <span class="border-hover-target">Reviews</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/brands.html">
                                                <span class="border-hover-target">Brands</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-hover" href="dashboard/profile-settings.html">
                                                <span class="border-hover-target">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth">

                        </li>
                        <li class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle" href="#" data-bs-toggle="dropdown" id="menu-item-docs" aria-haspopup="true" aria-expanded="false">Docs</a>
                            <div class="dropdown-menu mega-menu start-0 py-6 " aria-labelledby="menu-item-docs">
                                <div class="menumega-docs px-8" style="min-width: 250px">
                                    <a href="docs/usage/getting-started.html" class="d-flex text-decoration-none mb-4 mb-lg-0" title="Documentation">
                                        <div class="flex-shrink-0 fs-5 lh-1 text-muted pt-2">
                                            <svg class="icon">
                                                <use xlink:href="#book"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ps-6">
                                            <h6 class="mb-2">Documentation</h6>
                                            <small>Kick-start customization</small>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider mx-n8" />
                                    <a href="docs/components/accordion.html" class="d-flex text-decoration-none mb-4 mb-lg-0" title="UI Kit">
                                        <div class="flex-shrink-0 fs-5 lh-1 text-muted pt-2">
                                            <svg class="icon">
                                                <use xlink:href="#layer-group"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ps-6">
                                            <h6 class="mb-2">UI Kit</h6>
                                            <small>Flexible components</small>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider mx-n8" />
                                    <a href="docs/usage/changelog.html" class="d-flex text-decoration-none mb-4 mb-lg-0" title="Changelog">
                                        <div class="flex-shrink-0 fs-5 lh-1 text-muted pt-2">
                                            <svg class="icon">
                                                <use xlink:href="#pen-to-square"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ps-6">
                                            <h6 class="mb-2">Changelog</h6>
                                            <small>Regular updates</small>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider mx-n8" />
                                    <a href="https://sp.g5plus.net/" class="d-flex text-decoration-none mb-4 mb-lg-0" title="Support" target="_blank">
                                        <div class="flex-shrink-0 fs-5 lh-1 text-muted pt-2">
                                            <svg class="icon">
                                                <use xlink:href="#headset"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ps-6">
                                            <h6 class="mb-2">Support</h6>
                                            <small>https://sp.g5plus.net/</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="{{route('home.index')}}" class="navbar-brand px-8 py-4 mx-auto">
                    <img class="light-mode-img" src="{{ asset('assets/client/images/others/logo.png') }}" width="179" height="26" alt="Glowing - Bootstrap 5 HTML Templates">
                    <img class="light-mode-img" src="{{ asset('assets/client/images/others/logo.png') }}" width="179" height="26" alt="Glowing - Bootstrap 5 HTML Templates">
                    <img class="dark-mode-img" src="{{ asset('assets/client/images/others/logo-white.png') }}" width="179" height="26" alt="Glowing - Bootstrap 5 HTML Templates">
                </a>
                <div class="w-xl-50 d-flex align-items-center fs-28px">
                    <div class="d-none d-xl-block w-60 ms-auto">
                        <form action="{{ route('home.index') }}" method="get" class="search-box-1 form-border-transparent">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-body-secondary ps-12" placeholder="What are you looking for?" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
                                <button class="position-absolute bg-transparent border-0 px-0 fs-4 ps-6 top-0 bottom-0 my-auto z-index-3 text-body-emphasis" type="submit">
                                    <svg class="icon fs-18px mt-n3">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="fs-28px text-body-emphasis d-block d-xl-none">
                        <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas" data-bs-target="#searchModal" aria-controls="searchModal" aria-expanded="false">
                            <svg class="icon icon-magnifying-glass-light">
                                <use xlink:href="#icon-magnifying-glass-light"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="color-modes position-relative ps-5 d-block d-xl-none">
                        <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle" href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                            <svg class="bi my-1 theme-icon-active">
                                <use href="#sun-fill"></use>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#moon-stars-fill"></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>