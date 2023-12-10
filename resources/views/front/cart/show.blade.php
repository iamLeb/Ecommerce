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
    <div class="container">
        <div class="container-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="services-section-title text-center mb-55">
                        <h2 class="title mt-2">My Orders</h2>
                        <p>Below are your latest orders</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center customersOrder">

                {{--Js Code Here --}}

            </div>
        </div>
    </div>
    <!-- cart-area-end -->
    <script src="{{ asset('front/js/showCart.js') }}"></script>

@endsection
