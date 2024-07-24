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
                    <a data-animate="fadeInUp" href="shop-page-04.html" class="btn btn-lg btn-dark mt-6 btn-hover-bg-primary btn-hover-border-primary">Shop Now</a>
                </div>
                <div class="col-lg-6 order-0 order-lg-1 px-0">
                    <div class="d-block hover-zoom-in hover-shine">
                        <img src="#" data-src="{{ asset('assets/client/images/hero-slider/hero-slider-07.jpg') }}" class="lazy-image img-fluid w-100 vh-100 object-fit-cover" alt="slider" width="952" height="770">
                    </div>
                </div>
            </div>
        </section>
        <section class="container container-xxl pt-14 pt-lg-17">
            <div class="mb-lg-13 mb-7">
                <div class="text-center">
                    <h2 class="mb-6">Our Picks for You</h2>
                    <p class="fs-18px mb-0">Our products are designed for everyone.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-04.jpg') }}" width="160" height="160" alt="Moisturizers">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-04.jpg') }}" width="160" height="160" alt="Moisturizers">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Moisturizers</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-05.jpg') }}" width="160" height="160" alt="Toners">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-05.jpg') }}" width="160" height="160" alt="Toners">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Toners</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-06.jpg') }}" width="160" height="160" alt="Masks">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-06.jpg') }}" width="160" height="160" alt="Masks">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Masks</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-07.jpg') }}" width="160" height="160" alt="Kits">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-07.jpg') }}" width="160" height="160" alt="Kits">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Kits</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-08.jpg') }}" width="160" height="160" alt="Serum">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-08.jpg') }}" width="160" height="160" alt="Serum">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Serum</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class=" card border-0 fw-semibold ">
                        <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-09.jpg') }}" width="160" height="160" alt="Oil Cleansers">
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#" data-src="{{ asset('assets/client/images/image-box/image-box-white-09.jpg') }}" width="160" height="160" alt="Oil Cleansers">
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="#" class="text-decoration-none">Oil Cleansers</a>
                                <span class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                                    12
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-lg-16 pt-14">
            <div class="container container-xxl">
                <div class="row gy-30px gx-30px">
                    <div class="col-12 col-md-4">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover lazy-image light-mode-img" src="#" data-src="{{ asset('assets/client/images/banner/banner-05.jpg') }}" width="450" height="600" alt="Autumn Skincare">
                            <img class="lazy-image dark-mode-img card-img object-fit-cover lazy-image" src="#" data-src="{{ asset('assets/client/images/banner/banner-white-05.jpg') }}" width="450" height="600" alt="Autumn Skincare">
                            <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <h3 class="card-title text-white lh-45px">Autumn Skincare</h3>
                                <div><a href="#" class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Disvover Now <svg class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover lazy-image" src="#" data-src="{{ asset('assets/client/images/banner/banner-03.jpg') }}" width="450" height="600" alt="Anti-aging Cream">
                            <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <h3 class="card-title text-white lh-45px">Anti-aging Cream</h3>
                                <div><a href="#" class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Buy 1 get 1 <svg class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover lazy-image light-mode-img" src="#" data-src="{{ asset('assets/client/images/banner/banner-04.jpg') }}" width="450" height="600" alt="Sale Up To 40% Off">
                            <img class="lazy-image dark-mode-img card-img object-fit-cover lazy-image" src="#" data-src="{{ asset('assets/client/images/banner/banner-white-04.jpg') }}" width="450" height="600" alt="Sale Up To 40% Off">
                            <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <h3 class="card-title text-white lh-45px">Sale Up To 40% Off</h3>
                                <div><a href="#" class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Shop Sale <svg class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Conditioner">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-01-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330" height="440">
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                            <ins class="text-decoration-none">$30.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Conditioner</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Perfecting Facial Oil">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-02-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Perfecting Facial Oil</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Hand &amp; Body Wash">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-03-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-new">New</span></div>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Enriched Hand &amp; Body Wash</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Shampoo">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-04-330x440.jp') }}g" class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                            <ins class="text-decoration-none">$19.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Shampoo</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Hand Wash">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-05-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Enriched Hand Wash" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Enriched Hand Wash</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Duo">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-06-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Enriched Duo" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Enriched Duo</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-07-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Spray</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Vital Eye Cream">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-08-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Vital Eye Cream" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Vital Eye Cream</a></h4>
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
                        </div>
                    </div>
                    <div class="tab-pane fade" id="new-arrivals-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row gy-50px">
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Supreme Moisture Mask">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-09-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Supreme Moisture Mask</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Supreme Polishing Treatment">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-10-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Supreme Polishing Treatment" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Supreme Polishing Treatment</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Scalp Moisturizing Cream">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-11-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Scalp Moisturizing Cream" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Scalp Moisturizing Cream</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Natural Coconut Cleansing Oil">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-12-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Natural Coconut Cleansing Oil" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Natural Coconut Cleansing Oil</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Conditioner">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-01-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330" height="440">
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                            <ins class="text-decoration-none">$30.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Conditioner</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Perfecting Facial Oil">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-02-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330" height="440">
                                        </a>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Perfecting Facial Oil</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Hand &amp; Body Wash">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-03-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-new">New</span></div>
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
                                        <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Enriched Hand &amp; Body Wash</a></h4>
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
                                                <div class="filled-stars" style="width: 100%">
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Shampoo">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-04-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                            <ins class="text-decoration-none">$19.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Shampoo</a></h4>
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
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sale-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row gy-50px">
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Conditioner">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-01-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330" height="440">
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                            <ins class="text-decoration-none">$30.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Conditioner</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Shampoo">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-04-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                            <ins class="text-decoration-none">$19.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield Shampoo</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Vital Eye Cream">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-08-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Vital Eye Cream" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Vital Eye Cream</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Supreme Moisture Mask">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-09-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Supreme Moisture Mask</a></h4>
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
                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                <div class="card card-product grid-1 bg-transparent border-0">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Natural Coconut Cleansing Oil">
                                            <img src="#" data-src="{{ asset('assets/client/images/products/product-12-330x440.jpg') }}" class="img-fluid lazy-image w-100" alt="Natural Coconut Cleansing Oil" width="330" height="440">
                                        </a>
                                        <div class="position-absolute product-flash z-index-2 "><span class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
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
                                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                            <ins class="text-decoration-none">$29.00</ins></span>
                                        <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Natural Coconut Cleansing Oil</a></h4>
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
                        </div>
                    </div>
                </div>
                <div class="text-center mt-11 pt-3">
                    <a href="#" class="btn btn-outline-dark">Shop All Products</a>
                </div>
            </div>
        </section>
        <section id="specia_offer_save_on_sets_1">
            <div class="container container-xxl">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 mb-12 mb-lg-0">
                        <img data-src="{{ asset('assets/client/images/banner/banner-55.jpg') }}" alt="banner" class="img-fluid lazy-image w-100" width="705" height="620" src="#">
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
        <section id="with_client_logo_1">
            <div class="container pt-14 pb-16 py-lg-20">
                <div class="row mt-5 mb-15">
                    <div class="col-lg-9 offset-lg-1 col-xl-8 offset-xl-2">
                        <div class="slick-slider main" data-slick-options="{&quot;slidesToShow&quot;: 1,&quot;dots&quot;:false,&quot;arrows&quot;:false, &quot;asNavFor&quot;: &quot;#with_client_logo_1 .thumb&quot;}">
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of furniture exactly the way you want it."</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin tags of years gone by. Light weight and great colours available."</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Amazing product. The results are so transformative in texture and my face feels plump and healthy. Highly recommend!"</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of furniture exactly the way you want it."</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin tags of years gone by. Light weight and great colours available."</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of furniture exactly the way you want it."</h4>
                            </div>
                            <div class="text-center" data-animate="fadeInUp">
                                <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of furniture exactly the way you want it."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider thumb" data-slick-options="{&quot;slidesToShow&quot;: 6,&quot;focusOnSelect&quot;: true,&quot;arrows&quot;: false, &quot;dots&quot;: false, &quot;asNavFor&quot;: &quot;#with_client_logo_1 .main&quot;, &quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:4}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:576,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:2}}] }">
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-01.png') }}" width="150" height="82" alt="goodness">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-01.png') }}" width="150" height="82" alt="goodness">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-02.png') }}" width="150" height="82" alt="grandgolden">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-02.png') }}" width="150" height="82" alt="grandgolden">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-03.png') }}" width="150" height="82" alt="parker">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-03.png') }}" width="150" height="82" alt="parker">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-04.png') }}" width="150" height="82" alt="thebeast">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-04.png') }}" width="150" height="82" alt="thebeast">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-05.png') }}" width="150" height="82" alt="hayden">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-05.png') }}" width="150" height="82" alt="hayden">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-06.png') }}" width="150" height="82" alt="goodmood">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-06.png') }}" width="150" height="82" alt="goodmood">
                        </div>
                        <div class="client-logo-item" data-animate="fadeInUp">
                            <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-01.png') }}" width="150" height="82" alt="goodness">
                            <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="{{ asset('assets/client/images/client-logo/client-logo-white-01.png') }}" width="150" height="82" alt="goodness">
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