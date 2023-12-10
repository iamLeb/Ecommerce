@extends('layouts.front')

@section('content')
    <!-- slider-area -->
    <section class="slider-area" data-background="{{ asset('front/img/bg/slider_area_bg.jpg') }}">
        <div class="container custom-container">
            <div class="row">
                <div class="col-7">
                    <div class="slider-active">
                        <div class="single-slider slider-bg" data-background="{{ asset('front/img/slider/slider_bg01.jpg') }}">
                            <div class="slider-content">
                                <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">top deal !</h5>
                                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">{{ env('APP_NAME') }}</h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Your grocery store with unlimited supplies</p>
                                <a href="{{ route('front.all') }}" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Shop Now</a>
                            </div>
                        </div>
                        <div class="single-slider slider-bg" data-background="{{ asset('front/img/slider/slider_bg01.jpg') }}">
                            <div class="slider-content">
                                <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Real simple !</h5>
                                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Time Grocery</h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Get amazing sale @AFG</p>
                                <a href="{{ route('front.all') }}" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="slider-banner-img mb-20">
                        <a href="{{ route('front.all') }}"><img src="{{ asset('front/img/slider/slider_banner01.jpg') }}" alt=""></a>
                    </div>
                    <div class="slider-banner-img">
                        <a href="{{ route('front.all') }}"><img src="{{ asset('front/img/slider/slider_banner02.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="slider-banner-img">
                        <a href="{{ route('front.all') }}"><img src="{{ asset('front/img/slider/slider_banner03.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- category-area -->
        <div class="container custom-container">
            <div class="slider-category-wrap">
                <div class="row category-active">
                    @foreach($categories as $category)
                        <div class="col-lg-6">
                            <div class="category-item">
                                <a href="{{ route('front.category.product', $category->id) }}" class="category-link"></a>
                                <div class="category-thumb">
                                    <img src="{{ asset("images/$category->photo") }}" alt="">
{{--                                    <img src="https://source.unsplash.com/random/100x100" alt="">--}}
                                </div>
                                <div class="category-content">
                                    <h6 class="title">{{ ucfirst($category->name) }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- category-area-end -->

    </section>
    <!-- slider-area-end -->

    <!-- discount-area -->
    <section class="discount-area pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item mb-20">
                        <div class="discount-thumb">
                            <img src="{{ asset('front/img/product/discount_img01.jpg') }}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>healthy food</span>
                            <h4 class="title"><a href="{{ route('front.all') }}">100 organic UP TO 35%</a></h4>
                            <a href="{{ route('front.all') }}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item mb-20">
                        <div class="discount-thumb">
                            <img src="{{ asset('front/img/product/discount_img02.jpg') }}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>healthy food</span>
                            <h4 class="title"><a href="{{ route('front.all') }}">Hygienically Packed</a></h4>
                            <a href="{{ route('front.all') }}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item style-two mb-20">
                        <div class="discount-thumb">
                            <img src="{{ asset('front/img/product/discount_img03.jpg') }}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>healthy food</span>
                            <h4 class="title"><a href="{{ route('front.all') }}">AFG Best Sale UP TO 15%</a></h4>
                            <a href="{{ route('front.all') }}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discount-area-end -->

    <!-- best-deal-area -->
    <section class="best-deal-area pt-60 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="best-deal-top-wrap">
                        <div class="bd-section-title">
                            <h3 class="title">Best Deals <span>of this Week!</span></h3>
                            <p>A virtual assistant collects the products from your list</p>
                        </div>
                        <div class="coming-time" data-countdown="2021/10/20"></div>
                    </div>
                </div>
            </div>
            <div class="row best-deal-active">
                @foreach($productsAgain as $product)
                    <div class="col-xl-3">
                            <div class="best-deal-item">
                                <div class="best-deal-thumb">
                                    <a href="{{ route('front.show', $product->id) }}">
                                        <img src="{{ asset('images/' . $product->image->first()->image ) }}" alt=""></a>
{{--                                        <img src="{{ asset('no-image-icon-23494.png') }}" alt="">--}}
                                </div>
                                <div class="best-deal-content">
                                    <div class="main-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4 class="title"><a href="{{ route('front.show', $product->id) }}">{{ ucfirst($product->name) }}</a></h4>
                                        <p>${{ $product->price }}</p>
                                    </div>
                                    <div class="icon">
                                        <a href="{{ route('front.show', $product->id) }}"><button style="border: 0; background: none; color: orange; font-weight: bold" type="submit">+</button></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- best-deal-area-end -->

    <!-- special-products-area -->
    <section class="special-products-area gray-bg pt-75 pb-60">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Awesome Shop</span>
                        <h2 class="title">Our Special Products</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="section-btn text-left text-md-right">
                        <a href="{{ route('front.all') }}" class="btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="special-products-wrap">
                <div class="row">
                    <div class="col-3 d-none d-lg-block">
                        <div class="special-products-add">
                            <div class="sp-add-thumb">
                                <img src="{{ asset('front/img/product/special_products_add.jpg') }}" alt="">
                            </div>
                            <div class="sp-add-content">
                                <span class="sub-title">healthy food</span>
                                <h4 class="title">Your favorite <b>Product</b></h4>
                                <p>-- Super Offer --</p>
                                <a href="{{ route('front.all') }}" class="btn rounded-btn">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="row justify-content-center">
                            @foreach($products as $product)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="sp-product-item mb-20">
                                        <div class="sp-product-thumb">
                                            <span class="@if($product->status) batch @else batch discount @endif">@if($product->status) In stock @else Out of stock @endif</span>
                                            <a href="{{ route('front.show', $product->id) }}">
                                                <img src="{{ asset('images/' . $product->image->first()->image ) }}" alt="Image">
{{--                                                <img src="{{ asset('no-image-icon-23494.png') }}" alt="Image">--}}

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
                                            <span class="product-status">${{ $product->price }}</span>

                                            <form class="addToCart">
                                                <div class="sp-cart-wrap">
                                                    <input name="name" type="hidden" value="{{ $product->name }}">
                                                    <input name="price" type="hidden" value="{{ $product->price }}">
                                                    <input name="status" type="hidden" value="{{ $product->status }}">
                                                    <input name="image" type="hidden" value="{{ $product->image->first()->image }}">
                                                    <input name="id" type="hidden" value="{{ $product->id }}">
                                                    <div class="cart-plus-minus">
                                                        <input name="quantity" type="text" value="1">
                                                        <div class="dec qtybutton">-</div>
                                                        <div class="inc qtybutton">+</div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <button data-product-id="{{$product->id}}" type="submit" class="btn" style="border-radius: 10px">
                                                        <i class="flaticon-shopping-cart-empty-side-view"></i> Add to cart
                                                    </button>
                                                </div>
                                            </form>
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
    <!-- special-products-area-end -->

    <!-- coupon-area -->
    <div class="coupon-area gray-bg pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-bg">
                        <div class="coupon-title">
                            <span>Use coupon Code</span>
                            <h3 class="title">Get $3 Discount Code</h3>
                        </div>
                        <div class="coupon-code-wrap">
                            <h5 class="code">AFG21abs</h5>
                            <img src="{{ asset('front/img/images/coupon_code.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coupon-area-end -->

    <!-- best-sellers-area -->
    <section class="best-sellers-area pt-75">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Best Sellers</span>
                        <h2 class="title">Best Offers View</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="section-btn text-left text-md-right">
                        <a href="{{ route('front.all') }}" class="btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="best-sellers-products">
                <div class="row justify-content-center">
                    @foreach($productsAgain as $product)
                        <div class="col-3">
                            <div class="sp-product-item mb-20">
                                <div class="sp-product-thumb">
                                    <span class="batch">New</span>
                                    <a href="{{ route('front.show', $product->id) }}">
                                        <img src="{{ asset('images/' . $product->image->random()->image ) }}" alt="">
{{--                                        <img src="{{ asset('no-image-icon-23494.png') }}" alt="">--}}
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
                                    <h6 class="title"><a href="{{ route('front.show', $product->id) }}">{{ $product->name }}</a></h6>
                                    <span class="product-status">IN Stock</span>
{{--                                    <div class="sp-cart-wrap">--}}
{{--                                        <form action="#">--}}
{{--                                            <div class="cart-plus-minus">--}}
{{--                                                <input type="text" value="1">--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
                                    <p>${{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- best-sellers-area-end -->

    <!-- discount-area -->
    <section class="discount-style-two pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount-item-two">
                        <div class="discount-thumb">
                            <img src="{{ asset('front/img/product/s_discount_img01.jpg') }}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>healthy food</span>
                            <h4 class="title"><a href="{{ route('front.all') }}">organic farm for ganic</a></h4>
                            <p>Super Offer TO 50% OFF</p>
                            <a href="{{ route('front.all') }}" class="btn rounded-btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount-item-two">
                        <div class="discount-thumb">
                            <img src="{{ asset('front/img/product/s_discount_img02.jpg') }}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>healthy food</span>
                            <h4 class="title"><a href="{{ route('front.all') }}">BABY FAVORITE UP TO 15%</a></h4>
                            <p>Super Offer TO 50% OFF</p>
                            <a href="{{ route('front.all') }}" class="btn rounded-btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discount-area-end -->
@endsection
