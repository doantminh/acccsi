@extends('layouts.client')

@section('css')
@endsection

@section('content')

<main id="content" class="wrapper layout-page">
    <section>
        <div class="row align-items-center hero hero-header-03 mx-0 bg-section-2">
            <div class="col-lg-6 order-1 order-lg-0 text-center py-lg-0 py-16 px-sm-0 px-6">
                <div data-animate="fadeInUp" class="fs-4 fw-semibold text-primary mb-8">The Perfect Skincare</div>
                <h2 data-animate="fadeInUp" class="mx-auto hero-540 fs-1 mb-4 px-4">Care for Your Skin, Care for Your Beauty</h2>
                <p data-animate="fadeInUp" class="mx-auto hero-desc fs-18px text-body-calculate">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                <a data-animate="fadeInUp" href="{{route('home.index')}}" class="btn btn-lg btn-dark mt-6 btn-hover-bg-primary btn-hover-border-primary">Shop Now</a>
            </div>
            <div class="col-lg-6 order-0 order-lg-1 px-0">
                <div class="d-block hover-zoom-in hover-shine">
                    <img src="{{ asset('assets/client/images/banner/banner.jpg') }}"  class="lazy-image img-fluid w-100 vh-100 object-fit-cover" alt="slider" width="952" height="770">
                </div>
            </div>
        </div>
    </section>
    <section class="container container-xxl pt-14 pt-lg-17">
        <div class="mb-lg-13 mb-7">
            <div class="text-center">
                <h2 class="mb-6">Các thương hiệu nổi bật</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach( $danhmuc as $danhmuc ): ?>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                <div class=" card border-0 fw-semibold ">
                    <a href="#" class="">
                        <img class="rounded-circle" src="{{ Storage::url($danhmuc->hinh_anh) }}" data-src="" width="200px" height="150px" alt="Toners">
                    </a>
                    <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                        <h4 class="fs-5 text-center position-relative">
                            <a href="#" class="text-decoration-none">{{$danhmuc->ten_danh_muc}}</a>
                        </h4>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </section>
   
    <section id="product_tabs">
        <div class="container container-xxl pt-14 pt-lg-16 pb-15 pb-lg-20 mb-4" data-bs-toggle="tab-dropdown">
            <ul class="nav nav-tabs border-0 d-lg-flex justify-content-center mb-12 d-none" role="tablist">
                <li class="nav-item" role="presentation">
                    <h2 class="mb-0 px-2 mx-1">
                        <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30 active" data-bs-toggle="tab" data-bs-target="#best-sellers-tab-pane" type="button" role="tab" aria-controls="best-sellers-tab-pane" aria-selected="true">Best Sellers</button>
                    </h2>
                </li>
                <li class="nav-item" role="presentation">
                    <h2 class="mb-0 px-2 mx-1">
                        <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30" data-bs-toggle="tab" data-bs-target="#new-arrivals-tab-pane" type="button" role="tab" aria-controls="new-arrivals-tab-pane" aria-selected="false">New Arrivals</button>
                    </h2>
                </li>
                <li class="nav-item" role="presentation">
                    <h2 class="mb-0 px-2 mx-1">
                        <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30" data-bs-toggle="tab" data-bs-target="#sale-tab-pane" type="button" role="tab" aria-controls="sale-tab-pane" aria-selected="false">Sale</button>
                    </h2>
                </li>
            </ul>
            <ul class="nav nav-tabs border-0 justify-content-center mb-12 d-flex d-lg-none py-2" role="tablist">
                <li class="nav-item me-4">
                    <h3 class="mb-0">You are in</h3>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle text-body-emphasis text-decoration-none d-flex align-items-center h3 mb-0" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Best Sellers</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item m-0 h5 active" href="#" data-bs-toggle="tab" data-bs-target="#best-sellers-tab-pane" role="tab" aria-controls="best-sellers-tab-pane" aria-selected="true">Best Sellers</a></li>
                        <li class="nav-item"><a class="dropdown-item m-0 h5" href="#" data-bs-toggle="tab" data-bs-target="#new-arrivals-tab-pane" role="tab" aria-controls="new-arrivals-tab-pane" aria-selected="false">New Arrivals</a></li>
                        <li class="nav-item"><a class="dropdown-item m-0 h5" href="#" data-bs-toggle="tab" data-bs-target="#sale-tab-pane" role="tab" aria-controls="sale-tab-pane" aria-selected="false">Sale</a></li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="best-sellers-tab-pane" role="tabpanel" tabindex="0">
                    <div class="row gy-50px">
                        <?php foreach ($listsanpham as $sanpham) : ?>
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">

                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="{{route('product.show',$sanpham->id)}}" class="hover-zoom-in d-block" title="Shield Conditioner">
                                            <img src="{{Storage::url($sanpham->hinh_anh)}}" data-src="" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330px" >
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart">
                                                <svg class="icon icon-shopping-bag-open-light">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal" class="d-flex align-items-center justify-content-center">
                                                    <svg class="icon icon-eye-light">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Wishlist">
                                                <svg class="icon icon-star-light">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare" href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Compare">
                                                <svg class="icon icon-arrows-left-right-light">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="card-body text-center p-0">
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                            <del class=" text-body fw-500 me-4 fs-13px">{{$sanpham->gia_san_pham}}đ</del>
                                            <ins class="text-decoration-none">{{$sanpham->gia_khuyen_mai}}đ</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="">{{$sanpham->ten_san_pham}}</a></h4>
                                        <div class="d-flex align-items-center fs-12px justify-content-center">
                                            <div class="rating">
                                                <div class="empty-stars">
                                                    <span class="star">
                                                        <svg class="icon star-o">
                                                            <use xlink:href="#star-o"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star-o">
                                                            <use xlink:href="#star-o"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star-o">
                                                            <use xlink:href="#star-o"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star-o">
                                                            <use xlink:href="#star-o"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star-o">
                                                            <use xlink:href="#star-o"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="filled-stars" style="width: 80%">
                                                    <span class="star">
                                                        <svg class="icon star text-primary">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star text-primary">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star text-primary">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star text-primary">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="star">
                                                        <svg class="icon star text-primary">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach   ?>
                    </div>
                </div>
                {{ $listsanpham->links('pagination::bootstrap-5') }}
            </div>
            <div class="text-center mt-11 pt-3">
                <a href="{{route('home.index')}}" class="btn btn-outline-dark">Shop All Products</a>
            </div>
        </div>
    </section>
    <section id="specia_offer_save_on_sets_1">
        <div class="container container-xxl">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-12 mb-lg-0">
                    <img data-src="{{ asset('assets/client/images/banner/roll-sneaker-avarta.jpg') }}" alt="banner" class="img-fluid lazy-image w-100" width="705" height="620" src="#">
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 ps-lg-10 pe-xl-18">
                    <p class="text-uppercase text-body-emphasis fw-semibold ls-1 d-flex align-items-center pb-2">Special offer <span class="badge bg-primary fs-15px py-3 px-5 ms-5 ls-0 fw-bold lh-12">-20%</span></p>
                    <h2 class="mb-5">Save on Sets</h2>
                    <p class="fs-18px mb-5">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                    <div class="d-flex countdown ms-n4 ms-md-n7" data-countdown="true" data-countdown-end="Jan 22, 2024 00:00:00">
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="day fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="hour fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="minute fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="second fw-semibold text-primary font-primary"></span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary mt-9">Get Only $39,00</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-section-2 overflow-hidden" id="specia_offer_beauty_inspired_by_real_life_1">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-6 ps-6">
                    <div class="py-lg-23 py-16 mt-lg-3 mb-lg-5 ms-lg-auto content-wrap">
                        <div class="text-left">
                            <p class="fs-15px mb-7 ls-1 text-body-emphasis fw-semibold text-uppercase">Special offer</p>
                            <h2 class="mb-6 mw-xl-50 mw-lg-60 pt-1">Beauty Inspired by Real Life</h2>
                            <p class="fs-18px mb-0 mw-xl-60 mw-lg-75">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                        </div>
                        <a href="#" class="btn btn-white mt-10 mb-2">Discover Now</a>
                    </div>
                </div>
                <div class="col-lg-6 py-25 py-lg-0 position-relative">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center w-lg-half-screen">
                        <div class="lazy-bg bg-overlay position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right   light-mode-img" data-bg-src="{{ asset('assets/client/images/others/video-01.jpg') }}">
                        </div>
                        <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right" data-bg-src="{{ asset('assets/client/images/others/video-white-01.jpg') }}">
                        </div>
                        <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM" class="square view-video rounded-circle z-index-1 bg-body text-body-emphasis fs-2 bg-dark-hover text-light-hover" style="--square-size:115px;"><svg class="icon">
                                <use xlink:href="#icon-play-fill"></use>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection