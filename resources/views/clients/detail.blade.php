@extends('layouts.client')

@section('css')
@endsection

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .product-image {
            height: 400px;
            object-fit: cover;
        }

        .thumbnail-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnail {
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            margin: 0 5px;
            border: 2px solid transparent;
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">
            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="">Home</a></li>
                            <li class="breadcrumb-item"><a title="Shop" href="">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$sanpham->ten_san_pham}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container pt-6 pb-13 pb-lg-20">
            <div class="row ">
                <section class="container pt-6 pb-14 pb-lg-20">
                    <div class="row ">
                        <div class="col-md-6 pe-lg-13">
                            <div class="position-relative">
                                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{Storage::url($sanpham->hinh_anh)}}" class="d-block w-100 product-image" alt="Image 1">
                                        </div>
                                        <?php
                                        foreach ($hinhanhsp as $hinhanhsp) : ?>
                                            <div class="carousel-item">
                                                <img src="{{Storage::url($hinhanhsp->hinh_anh)}}" class="d-block w-100 product-image" alt="Image 2">
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="thumbnail-container">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-10">
                            <p class="d-flex align-items-center mb-6">
                                <span class="text-decoration-line-through">{{number_format($sanpham->gia_san_pham)}}</span>
                                <span class="fs-18px text-body-emphasis ps-6 fw-bold">{{number_format($sanpham->gia_khuyen_mai)}}</span>
                            </p>
                            <h1 class="mb-4 pb-2 fs-4">{{$sanpham->ten_san_pham}}</h1>
                            <div class="d-flex align-items-center fs-15px mb-6">
                                <p class="mb-0 fw-semibold text-body-emphasis">4.86</p>
                                <div class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
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
                                    </div>
                                </div>
                                <a href="#" class="border-start ps-6 text-body">Read 2947 reviews</a>
                            </div>
                            <p class="fs-15px">{{$sanpham->mo_ta}}</p>
                            <p class="mb-4 pb-2">
                                <span class="text-body-emphasis">
                                    <svg class="icon fs-5 me-4 pe-2 align-text-bottom">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                    {{$sanpham->luot_xem}} people
                                </span>
                                are viewing this right now
                            </p>
                            <p class="mb-4 pb-2 text-body-emphasis">
                            <form class="mb-9 pb-2" action="{{route('cart.add')}}" method="POST">
                                @csrf
                                <div class="row align-items-end">
                                    <div class="form-group col-sm-4">
                                        <label class=" text-body-emphasis fw-semibold fs-15px pb-6" for="number">Quantity: </label>
                                        <div class="input-group position-relative w-100 input-group-lg">
                                            <a href="#" class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus"><i class="far fa-minus"></i></a>
                                            <input name="quantity" type="number" id="quantityInput" class="product-info-2-quantity form-control w-100 px-6 text-center" value="1" required>
                                            <input type="hidden" name="product_id" value="{{$sanpham->id}}">
                                            <a href="#" class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus"><i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 pt-9 mt-2 mt-sm-0 pt-sm-0">
                                        <button type="submit" class="btn-hover-bg-primary btn-hover-border-primary btn btn-lg btn-dark w-100">Add To Cart
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex align-items-center flex-wrap">
                                <a href="compare.html" class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                                    <svg class="icon fs-5">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                    <span class="ms-4 ps-2">Compare</span>
                                </a>
                                <a href="#" class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                                    <svg class="icon fs-5">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                    <span class="ms-4 ps-2">Add to wishlist</span>
                                </a>
                            </div>
                            <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Sku:</span>
                                    <span class="ps-4">{{$sanpham->ma_sp}}</span>
                                </li>
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Categories:</span>
                                    <span class="ps-4">
                                        <?php foreach ($danhmuc as $danhmuc) : ?>
                                            {{ $sanpham->danh_muc_id == $danhmuc->id ? $danhmuc->ten_danh_muc : '' }}
                                        <?php endforeach; ?>
                                    </span>
                                </li>
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Share:</span>
                                    <ul class="list-inline d-flex align-items-center mb-0 col-8 col-lg-10 ps-4">
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip" data-bs-title="Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip" data-bs-title="Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip" data-bs-title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip" data-bs-title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div class="border-top w-100 h-1px"></div>
        <div class="border-top w-100 h-1px"></div>
        <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
            <div class="text-center">
                <h2 class="mb-12">Customer Reviews</h2>
            </div>
            <div class="mb-11">
                <div class=" d-md-flex justify-content-between align-items-center">
                    <div class=" d-flex align-items-center">
                        <h4 class="fs-1 me-9 mb-0">4.86</h4>
                        <div class="p-0">
                            <div class="d-flex align-items-center fs-6 ls-0 mb-4">
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
                                    <div class="filled-stars" style="width: 96%">
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
                                </div>
                            </div>
                            <p class="mb-0">2947 Reviews, 18 Q&amp;As</p>
                        </div>
                    </div>
                    <div class="text-md-end mt-md-0 mt-7">
                        <a href="#customer-review" class="btn btn-outline-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="customer-review"><svg class="icon">
                                <use xlink:href="#icon-Pencil"></use>
                            </svg>
                            Wire A Review
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse mb-14" id="customer-review">
                <form class="product-review-form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group mb-7">
                                <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewName">Name</label>
                                <input id="reviewName" class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewEmail">Email</label>
                                <input id="reviewEmail" type="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="mt-4 mb-5 fs-6 fw-semibold text-body-emphasis">Your Rating*</p>
                        <div class="form-group mb-6 d-flex justify-content-start">
                            <div class="rate-input">
                                <input type="radio" id="star5" name="rate" value="5" style>
                                <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="far fa-star"></i>
                                </label>
                                <input type="radio" id="star4" name="rate" value="5" style>
                                <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="far fa-star"></i>
                                </label>
                                <input type="radio" id="star3" name="rate" value="5" style>
                                <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="far fa-star"></i>
                                </label>
                                <input type="radio" id="star2" name="rate" value="5" style>
                                <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="far fa-star"></i>
                                </label>
                                <input type="radio" id="star1" name="rate" value="5" style>
                                <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="far fa-star"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-7">
                        <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewTitle">Title of Review:</label>
                        <input id="reviewTitle" type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group mb-10">
                        <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewMessage">How was your overall experience?</label>
                        <textarea id="reviewMessage" class="form-control" name="message" rows="5"></textarea>
                    </div>
                    <div class="d-flex">
                        <div class="me-4">
                            <div class="input-group align-items-center">
                                <input type="file" name="img" class="form-control border" id="reviewrAddPhoto">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="product-filter-review">
                <h3 class="fs-5">Filter Review</h3>
                <ul class="list-inline mb-8 mx-n3 filter-review">
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Foundation
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Coverage
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Skin
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Color
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Shade
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Make up
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Face
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Ingredients
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Moisturizer
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Pure
                        </a>
                    </li>
                    <li class="list-inline-item spacing">
                        <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                            Nature
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            ...
                        </a>
                    </li>
                    <li class="collapse m-3 list-inline-item collapse" id="collapseExample">
                        <ul class="list-inline list-inline-item">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                    Good Value
                                </a>
                            </li>
                        </ul>
                        <ul class="list-inline list-inline-item">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                    Lightweight
                                </a>
                            </li>
                        </ul>
                        <ul class="list-inline list-inline-item">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                    Smells Great
                                </a>
                            </li>
                        </ul>
                        <ul class="list-inline list-inline-item">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                    Easy To Use
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="row gy-15px align-items-center spacing-02">
                    <div class="col-auto search-review w-100 px-4">
                        <div class="form-group product-review-form">
                            <div class="input-group-prepend position-absolute z-index-10">
                                <button class="btn btn-link text-secondary fs-15px px-7" type="submit"><i class="far fa-search"></i>
                                </button>
                            </div>
                            <input type="text" id="search_reviews" name="search_reviews" class="form-control fs-15px pe-7 ps-13  rounded" placeholder="Search reviews">
                            <label for="search_reviews" class="visually-hidden">Search reviews</label>
                        </div>
                    </div>
                    <div class="col-auto dropdown skin-goal px-4">
                        <label for="skin_goal" class="visually-hidden">Skin goal</label>
                        <select name="skin_goal" id="skin_goal" class="form-select">
                            <option>Skin goal</option>
                            <option>Looking Pores</option>
                            <option>Clear Skin</option>
                            <option>Chicagon</option>
                            <option>Dewy-Looking Skin</option>
                            <option>Radiant</option>
                        </select>
                    </div>
                    <div class="col-auto dropdown skin-goal px-4">
                        <label for="image_video" class="visually-hidden">Image &amp; Video</label>
                        <select name="image_video" id="image_video" class="form-select">
                            <option>Image &amp; Video</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                        </select>
                    </div>
                    <div class="col-auto dropdown skin-goal px-4">
                        <label for="sort_by" class="visually-hidden">Sort by</label>
                        <select name="sort_by" id="sort_by" class="form-select">
                            <option>Sort by</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" mt-12">
                <?php foreach ($binhluan as $binhluan) : ?>
                    <h3 class="fs-5">2947 Reviews</h3>
                    <div class="border-bottom pb-7 pt-10">
                        <div class="d-flex align-items-center mb-6">
                            <div class="d-flex align-items-center fs-15px ls-0">
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
                                </div>
                            </div>
                            <span class="fs-3px mx-5"><i class="fas fa-circle"></i></span>
                            <span class="fs-14">{{$binhluan->thoi_gian}}</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center mb-5">
                            <img src="#" data-src="../assets/images/others/single-product-01.png" class="me-6 lazy-image rounded-circle" width="60" height="60" alt="Avatar">
                            <div class>
                                <h5 class="mt-0 mb-4 fs-14px text-uppercase ls-1">JENNIFER C.</h5>
                                <p class="mb-0">/ Orlando, FL</p>
                            </div>
                        </div>
                        <p class="mb-10 fs-6">{{$binhluan->noi_dung}}</p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#" class="fs-14px mb-0 text-secondary">Was This Review Helpful?</a>
                            <p class="mb-0 ms-7 text-body-emphasis">
                                <svg class="icon icon-like align-baseline">
                                    <use xlink:href="#icon-like"></use>
                                </svg>
                                10
                            </p>
                            <p class="mb-0 ms-6 text-body-emphasis">
                                <svg class="icon icon-unlike align-baseline">
                                    <use xlink:href="#icon-unlike"></use>
                                </svg>
                                1
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination">
                <ul class="pagination m-0">
                    <li class="page-item">
                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="#" aria-label="Previous">
                            <svg class="icon">
                                <use xlink:href="#icon-angle-double-left"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="#" aria-label="Next">
                            <svg class="icon">
                                <use xlink:href="#icon-angle-double-right"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>

    @endsection

    @section('js')
<script>
    $('.position-absolute').on('click', function(){
        var $button = $(this);
        var $input = $button.parent().find('input');
        var oldValue = parseFloat($input.val()) ;

        if($button.hasClass('shop-up')){
            var newVal = oldValue + 1;
        }
        else{
            if(oldValue > 1){
                var newVal = oldValue - 1;
            }
            else{
                var newVal = 1;
            }
        }
        $input.val(newVal);

    });
    $('#quantityInput').on('change', function() {
        var value = parseInt($(this).val(),10);

        if(isNaN(value)||value<1){
            alert('só lượng phải lớn hơn bằng 1.')
            $(this).val(1)
        }
    });
</script>
    @endsection