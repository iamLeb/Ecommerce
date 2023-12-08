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
                                <li class="breadcrumb-item active" aria-current="page">All Postings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- shop-area -->
    <section class="shop--area pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3 order-2 order-lg-0">
                    <aside class="shop-sidebar">
                        <div class="widget shop-widget">
                            <div class="shop-widget-title">
                                <h6 class="title">Product Categories</h6>
                            </div>
                            <div class="shop-cat-list">
                                <ul>
                                    @foreach($categories as $category)
                                        <li><a href="shop.html">{{ ucfirst($category->name) }} <span>+</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="widget shop-widget">
                            <div class="shop-widget-title">
                                <h6 class="title">NEW PRODUCT</h6>
                            </div>
                            <div class="sidebar-product-list">
                                <ul>
                                    @foreach($latestProducts as $product)
                                        <li>
                                            <div class="sidebar-product-thumb">
                                                <a href="shop-details.html"><img src="{{ asset('images/' . $product->image->first()->image) }}" alt=""></a>
                                            </div>
                                            <div class="sidebar-product-content">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h5><a href="{{ route('front.show', $product->id) }}">{{ ucfirst($product->name) }}</a></h5>
                                                <span>${{ $product->price }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="shop-widget-banner text-center">
                                <a href="shop.html"><img src="{{ asset('front/img/product/sidebar_shop_ad.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-9">
                    <div class="shop-discount-area">
                        <div class="discount-content shop-discount-content">
                            <span>Canada No.1 Grocery store</span>
                            <h4 class="title"><a>{{ env('APP_NAME') }} </a></h4>
                        </div>
                    </div>
                    <div class="shop-products-wrap">
                        <div class="row justify-content-center">
                            @foreach($products as $product)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="sp-product-item">
                                        <div class="sp-product-thumb">
                                            <span class="batch">New</span>
                                            <a href="{{ route('front.show', $product->id) }}">
                                                <img src="{{ asset('images/' . $product->image->first()->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="sp-product-content">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="title"><a href="{{ route('front.show', $product->id) }}">{{ ucfirst($product->name) }}</a></h6>
                                            <span class="product-status @if(!$product->status) text-danger @endif">@if($product->status) In stock @else Out of stock @endif</span>
                                            <div class="sp-cart-wrap">
                                                <form action="#">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                            <p>${{ $product->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->
@endsection
