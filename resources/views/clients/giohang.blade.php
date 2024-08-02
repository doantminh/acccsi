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
                        <li class="breadcrumb-item"><a title="Home" href="../index.html">Home</a></li>
                        <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="shopping-cart">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <h2 class="text-center fs-2 mt-12 mb-13">Shopping Cart</h2>
            <form action="{{route('cart.update')}}" method="post">
                @csrf
                <table class="table border">
                    <thead class="bg-body-secondary">
                        <th scope="col" class="fw-semibold border-1 ps-11">products</th>
                        <th colspan="" class="fw-semibold border-1">Price</th>
                        <th scope="col" class="fw-semibold border-1">Quantity</th>
                        <th scope="col" class="fw-semibold border-1">Total</th>
                        <th scope="col" class="fw-semibold border-1">Remove</th>
                    </thead>
                    <tbody>
                        @foreach($cart as $key => $item)
                        <tr class="position-relative ">
                            <td scope="row" class="pe-5 ps-8 py-7 shop-product">
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-0" type="checkbox" name="check-product" value="checkbox">
                                    </div>
                                    <a href="{{route('product.show', $key)}}">
                                        <div class="ms-6 me-7">
                                            <img src="{{Storage::url($item['hinh_anh'])}}" class="lazy-image" width="100">
                                            <input type="hidden" name="cart[{{$key}}][hinh_anh]" value="{{$item['hinh_anh']}}">
                                        </div>
                                        <div class>
                                            <p class="fw-500 mb-1 text-body-emphasis">{{$item['ten_san_pham']}}</p>
                                            <input type="hidden" name="cart[{{$key}}][ten_san_pham]" value="{{$item['ten_san_pham']}}">
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td class="align-middle">
                                <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">{{ number_format($item['gia_san_pham'], 0, '', '.' )  }}đ</p>
                                <input type="hidden" name="cart[{{$key}}][gia_san_pham]" value="{{$item['gia_san_pham']}}">
                            </td>
                            <td class="align-middle">
                                <div class="input-group position-relative shop-quantity">
                                    <a href="#" class="shop-down position-absolute z-index-2"><i class="far fa-minus"></i></a>
                                    <input name="cart[{{$key}}][so_luong]" type="number" class="quantityInput form-control form-control-sm px-10 py-4 fs-6 text-center border-0" data-price="{{$item['gia_san_pham']}}" value="{{$item['so_luong']}}" required>
                                    <a href="#" class="shop-up position-absolute z-index-2"><i class="far fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="align-middle fw-bold mr-xl-11">
                                <p class="subtotal">{{ number_format($item['gia_san_pham'] * $item['so_luong'], 0, '', '.' )  }}đ</p>
                            </td>
                            <td class="align-middle text-end pe-8" class="pro-remove">
                                <a href="#" class="pro-remove">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <button type="submit" class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary">Update</button>
            </form>
            <div class="row pt-8 pt-lg-11 pb-16 pb-lg-18">
                <div class="col-lg-4 pt-2">
                    <h4 class="fs-24 mb-6">Coupon Discount</h4>
                    <p class="mb-7">Enter you coupon code if you have one.</p>
                    <form>
                        <input type="text" class="form-control mb-7" placeholder="Enter coupon code here">
                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                            Apply coupon
                        </button>
                    </form>
                </div>
                <div class="col-lg-4 pt-lg-2 pt-10">
                    <h4 class="fs-24 mb-6">Shipping Caculator</h4>
                    <form>
                        <div class="d-flex mb-5">
                            <div class="form-check me-6 me-lg-9">
                                <input class="form-check-input form-check-input-body-emphasis" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Free shipping
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-input-body-emphasis" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Flat rate: $75
                                </label>
                            </div>
                        </div>
                        <div class="dropdown bg-body-secondary rounded mb-7">
                            <a href="#" class="form-select text-body-emphasis dropdown-toggle d-flex justify-content-between align-items-center text-decoration-none text-secondary position-relative d-block" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Viet Nam
                            </a>
                            <div class="dropdown-menu w-100 px-0 py-4">
                                <a class="dropdown-item px-6 py-4" href="#">Andorra</a>
                                <a class="dropdown-item px-6 py-4" href="#">San Marino</a>
                                <a class="dropdown-item px-6 py-4" href="#">Tunisia</a>
                                <a class="dropdown-item px-6 py-4" href="#">Micronesia</a>
                                <a class="dropdown-item px-6 py-4" href="#">Solomon Islands</a>
                                <a class="dropdown-item px-6 py-4" href="#">Macedonia</a>
                            </div>
                        </div>
                        <input type="text" class="form-control mb-7" placeholder="State / County" required>
                        <input type="text" class="form-control mb-7" placeholder="City" required>
                        <input type="text" class="form-control mb-7" placeholder="Postcode / Zip">
                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                            Update total
                        </button>
                    </form>
                </div>
                <div class="col-lg-4 pt-lg-0 pt-11">
                    <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
                        <div class="card-body px-9 pt-6">
                            <div class="d-flex align-items-center justify-content-between mb-5 fw-bold">
                                <span>Subtotal:</span>
                                <span class="sub-total">{{ number_format($subTotal, 0, '', '.' )  }} đ</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between fw-bold">
                                <span>Shipping:</span>
                                <span class="shipping">{{ number_format($shipping, 0, '', '.' )  }} đ</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent px-0 pt-5 pb-7 mx-9">
                            <div class="d-flex align-items-center justify-content-between fw-bold mb-7 fw-bold">
                                <span class="text-secondary text-body-emphasis">Total pricre:</span>
                                <span class="total-amount">{{ number_format($total, 0, '', '.' )  }} đ</span>
                            </div>
                            <a href="{{route('order.create')}}" class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary" title="Check Out">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('js')
<script>
    function updateTotal() {
        var subtotal = 0;
        $('.quantityInput').each(
            function() {
                var $input = $(this);
                var price = parseFloat($input.data('price'));
                var quantily = parseFloat($input.val());
                subtotal += price * quantily;
            }
        )
        var shipping = parseFloat($('.shipping').text().replace(/\./g, '').replace(' đ', ''))
        var total = subtotal + shipping;

        $('.sub-total').text(subtotal.toLocaleString('vi-VN') + ' đ');
        $('.total-amount').text(subtotal.toLocaleString('vi-VN') + ' đ');
    }

    $('.position-absolute').on('click', function() {
        var $button = $(this);
        var $input = $button.parent().find('input');
        var oldValue = parseFloat($input.val());

        if ($button.hasClass('shop-up')) {
            var newVal = oldValue + 1;
        } else {
            if (oldValue > 1) {
                var newVal = oldValue - 1;
            } else {
                var newVal = 1;
            }
        }
        $input.val(newVal);

        var price = parseFloat($input.data('price'));
        var subtotalElement = $input.closest('tr').find('.subtotal');
        var newSubtotal = newVal * price;

        subtotalElement.text(newSubtotal.toLocaleString('vi-VN') + ' đ');
        updateTotal()
    });
    $('.quantityInput').on('change', function() {
        var value = parseInt($(this).val(), 10);

        if (isNaN(value) || value < 1) {
            alert('só lượng phải lớn hơn bằng 1.')
            $(this).val(1)
        }
        updateTotal()
    });
    $('.pro-remove').on('click', function() {
        event.preventDefault();
        var $row = $(this).closest('tr');
        $row.remove();
        updateTotal()
    });
    updateTotal()
</script>
@endsection