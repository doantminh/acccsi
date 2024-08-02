@extends('layouts.client')

@section('css')
@endsection

@section('content')
<main id="content" class="wrapper layout-page">
    <section class="z-index-2 position-relative pb-2 mb-12">
        <div class="bg-body-secondary mb-3">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1 mb-0">

                        <li class="breadcrumb-item active" aria-current="page">Đặt hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container pb-14 pb-lg-19">
        <div class="text-center">
            <h2 class="mb-6">Check out</h2>
        </div>
        <form action="{{route('order.store')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
            <div class="row">
                <div class="col-lg-4 pb-lg-0 pb-14 order-lg-last">
                    <div class="card border-0 rounded-0 shadow">
                        <div class="card-header px-0 mx-10 bg-transparent py-8">
                            <h4 class="fs-4 mb-8">Order Summary</h4>
                            @foreach($cart as $key => $item)
                            <div class="d-flex w-100 mb-7">
                                <div class="me-6">
                                    <img src="{{Storage::url($item['hinh_anh'])}}" class="lazy-image" width="80" alt="Natural Coconut Cleansing Oil">
                                </div>
                                <div class="d-flex flex-grow-1">
                                    <div class="pe-6">
                                        <a href="#" class>{{$item['ten_san_pham']}}<span class="text-body"> x{{$item['so_luong']}}</span></a>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="fs-14px text-body-emphasis mb-0 fw-bold">{{ number_format($item['gia_san_pham'], 0, '', '.' )  }}đ</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-body px-10 py-8">
                            <div class="d-flex align-items-center mb-2">
                                <span>Subtotal:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">{{ number_format($subTotal, 0, '', '.' )  }} đ</span>
                                <input type="hidden" name="tien_hang" value="{{$subTotal}}">
                            </div>
                            <div class="d-flex align-items-center">
                                <span>Shipping:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">{{ number_format($shipping, 0, '', '.' )  }} đ</span>
                                <input type="hidden" name="tien_ship" value="{{$shipping}}">
                            </div>
                        </div>
                        <div class="card-footer bg-transparent py-5 px-0 mx-10">
                            <div class="d-flex align-items-center fw-bold mb-6">
                                <span class="text-body-emphasis p-0">Total pricre:</span>
                                <span class="d-block ms-auto text-body-emphasis fs-4 fw-bold">{{ number_format($total, 0, '', '.' )  }} đ</span>
                                <input type="hidden" name="tong_tien" value="{{$total}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-first pe-xl-20 pe-lg-6">
                    <div class="checkout">
                        <div class="collapse" id="collapsecoupon">
                            <div class="card mw-60 border-0">
                                <div class="card-body py-10 px-8 my-10 border">
                                    <p class="card-text text-body-emphasis mb-8">
                                        If you have a coupon code, please apply it below.</p>
                                    <div class="input-group position-relative">
                                        <input type="email" class="form-control bg-body rounded-end" placeholder="Your Email*">
                                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                                            Apply Coupon
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="fs-4 pt-4 mb-7">Shipping Information</h4>
                        <div class="mb-7">
                            <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">name</label>
                            <div class="row">
                                <div class="col-md-6 mb-md-0 mb-7">
                                    <input type="text" class="form-control @error('ten_nguoi_nhan') is-invalid @enderror" id="first-name" value="{{Auth::user()->name}}" name="ten_nguoi_nhan" placeholder="First Name" required>
                                    @error('ten_nguoi_nhan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-7">
                            <div class="row">
                                <div class="col-md-8 mb-md-0 mb-7">
                                    <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase @error('dia_chi_nguoi_nhan') is-invalid @enderror">Street Address</label>
                                    <input type="text" class="form-control" id="street-address" placeholder="Địa chỉ" required name="dia_chi_nguoi_nhan" value="{{Auth::user()->dia_chi}}">
                                    @error('dia_chi_nguoi_nhan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="apt" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase @error('email') is-invalid @enderror">Email</label>
                                    <input type="text" class="form-control" id="apt" name="email_nguoi_nhan" value="{{Auth::user()->email}}" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-7">
                            <div class="row">
                                <div class="col-md-4 mb-md-0 mb-7">
                                    <label for="city" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase @error('so_dien_thoai_nguoi_nhan') is-invalid @enderror">Phone</label>
                                    <input type="text" class="form-control" id="city" name="so_dien_thoai_nguoi_nhan" value="{{Auth::user()->so_dien_thoai}}" placeholder="Số điện thoại" required>
                                    @error('so_dien_thoai_nguoi_nhan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-md-0 mb-7">
                                    <label for="city" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase @error('ghi_chu') is-invalid @enderror">note</label>
                                    <input type="text" class="form-control" id="city" name="ghi_chu" placeholder="Ghi chú">
                                    @error('ghi_chu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout mb-7">
                        <div class="mb-7">
                            <h4 class="fs-4 mb-8 mt-12 pt-lg-1">Thanh toán khi giao hàng</h4>
                        </div>
                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11 mt-md-7 mt-4">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection