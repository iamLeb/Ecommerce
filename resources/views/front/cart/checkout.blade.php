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
                                <li class="breadcrumb-item"><a href="{{ route('cart.index') }}">Cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- checkout-area -->
        <div class="checkout-area pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center" id="showInformation">
                    <div class="col-lg-7">
                        <div class="checkout-progress-wrap">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="checkout-progress-step">
                                <ul>
                                    <li class="active">
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        <span>Shipping</span>
                                    </li>
                                    <li>
                                        <div class="icon">2</div>
                                        <span>Order Successful</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="checkout-form-wrap">
                            <form>
                                <div class="checkout-form-top">
                                    <h5 class="title">Contact information</h5>
                                </div>
                                <input class="contact" name="contact" type="text" placeholder="Email or Mobile Phone Number *">
                                <div class="news-and-offers custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nao">
                                    <label class="custom-control-label" for="nao">Keep me up to date on news and offers</label>
                                </div>
                                <div class="building-info-wrap">
                                    <h5 class="title">Billing Information</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="firstName" name="firstName" type="text" placeholder="First Name *">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="lastName" name="lastName" type="text" placeholder="Last Name *">
                                        </div>
                                    </div>
                                    <input name="address" class="address" type="text" placeholder="Full Address *">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input name="city" class="city" type="text" placeholder="City">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <select disabled class="form-control province" id="province">
                                                <option value="MB">Manitoba</option>
                                            </select>
                                        </div>
                                    </div>

                                    <textarea name="instruction" class="message instruction" id="message" placeholder="Delivery instruction if any ( Optional )"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-cart-total order-summary-wrap">
                            <h3 class="title">Order Summary</h3>
                            <div class="holdAllItem"></div>
                            <div class="shop-cart-widget">
                                <form id="customerInfo">
                                    <ul>
                                        <li>
                                            <span>Shipping</span>
                                            <div class="shop-check-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="" name="delivery" checked>
                                                    <label class="" for="customCheck1">Free Delivery</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-total-amount"><span>Total Price</span> <div class="subTotal"></div></li>
                                    </ul>
                                    <div class="payment-method-info">
                                        <div class="paypal-method-flex">
                                            <div class="custom-control custom-checkbox" disabled="">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5" checked disabled>
                                                <label class="custom-control-label" for="customCheck5">Cash on delivery</label>
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-terms">
{{--                                        <p>Thanks for shopping with us</p>--}}
                                    </div>
                                    <button id="placeOrder" type="button" class="btn">Place order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- checkout-area-end -->
@endsection
