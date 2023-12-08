@extends('layouts.front')

@section('content')

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg-two">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a>Cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ALl</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- cart-area -->
    <div class="cart-area pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="cart-wrapper">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">QUANTITY</th>
                                    <th class="product-delete"></th>
                                </tr>
                                </thead>
                                <tbody class="holdRec"> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="shop-cart-total">
                        <h3 class="title">Cart Totals</h3>
                        <div class="shop-cart-widget">

                            <form class="submitOrder">
                                <ul>
                                    <li class="sub-total subTotal"></li>
                                </ul>
                                <a id="placeOrderButton" href="{{ route('front.cart.checkout') }}" class="btn">Place Order Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area-end -->
    <script src="{{ asset('front/js/showCart.js') }}"></script>

@endsection
