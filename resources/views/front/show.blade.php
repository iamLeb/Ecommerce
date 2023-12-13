@extends('layouts.front')

@section('content')
    <div class="breadcrumb-area breadcrumb-bg-two">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- shop-details-area -->
    <section class="shop-details-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="shop-details-flex-wrap">
                        <div class="shop-details-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @php $count = 0; @endphp
                                @foreach($product->image as $image)
                                    @php $count++ @endphp
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-{{ $count }}" role="tab" aria-controls="item-{{ $count }}" aria-selected="false">
                                            <img class="holdImg" src="https://arabicawhite.s3.amazonaws.com/afg/{{ $image->image }}" alt="">
                                        </a>
                                    </li>
                                @endforeach

                                <style>
                                    .holdImg {
                                        border-radius: 10px;
                                        padding: 10px;
                                    }
                                </style>
                            </ul>
                        </div>
                        <div class="shop-details-img-wrap">
                            <div class="tab-content" id="myTabContent">
                                @php $count = 0; @endphp
                                @foreach($product->image as $image)
                                    @php $count++ @endphp
                                    <div class="tab-pane fade show @if($count == 1) active @endif" id="item-{{ $count }}" role="tabpanel" aria-labelledby="item-one-tab">
                                        <div class="shop-details-img">
                                            <img class="holdImg" src="https://arabicawhite.s3.amazonaws.com/afg/{{ $image->image }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-content">
                        <h4 class="title">{{ ucfirst($product->name) }}</h4>
                        <div class="shop-details-meta">
                            <ul>
                                <li>Brand: <span>{{ env('APP_NAME') }}</span></li>
                                <li class="shop-details-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>Review</span>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-details-price">
                            <h2 class="price">${{ $product->price }}</h2>
                            <h5 class="stock-status @if($product->status) stock-status @else text-danger @endif ">@if($product->status) IN Stock @else Out of stock @endif</h5>
                        </div>
                        <p>{{ ucfirst($product->desc) }}</p>
                        <div class="shop-details-list">
                            <ul>
                                <li>Estimated Tax Rate: <span>12%</span></li>
                                <li>Availability: <span>All Locations</span></li>
                            </ul>
                        </div>

                        <form class="addToCart">
                            <div class="shop-perched-info">
                                <div class="sd-cart-wrap">
                                    <input name="name" type="hidden" value="{{ $product->name }}">
                                    <input name="price" type="hidden" value="{{ $product->price }}">
                                    <input name="status" type="hidden" value="{{ $product->status }}">
                                    <input name="image" type="hidden" value="{{ $product->image->first()->image }}">
                                    <input name="id" type="hidden" value="{{ $product->id }}">
                                    <div class="cart-plus-minus">
                                        <input name="quantity" type="text" value="1">
                                        <div class="dec qtybutton">-
                                        </div><div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                                <button data-product-id="{{ $product->id }}" class="btn">add to cart</button>
                            </div>
                        </form>

                        <div class="shop-details-bottom">
{{--                            <h5 class="title"><a href="#"><i class="far fa-heart"></i> Add To Wishlist</a></h5>--}}
                            <ul>
                                <li>
                                    <span>CATEGORIES :</span>
                                    {{ $product->category->name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-desc-wrap">
                        <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Product Details</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContentTwo">
                            <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                                <div class="product-desc-content">
                                    <h4 class="title">Product Details</h4>
                                    <div class="row">
                                        <div class="col-xl-3 col-md-5">
                                            <div class="product-desc-img">
                                                <img class="holdImg" src="https://arabicawhite.s3.amazonaws.com/afg/{{ $product->image->first()->image }}" alt="">

                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-md-7">
                                            <h5 class="small-title">{{ ucfirst($product->name) }}</h5>
                                            <p>
                                                {{ ucfirst($product->desc) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-details-area-end -->

    <!-- coupon-area -->
    <div class="coupon-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-bg">
                        <div class="coupon-title">
                            <span>Use coupon Code</span>
                            <h3 class="title">Get $3 Discount Code</h3>
                        </div>
                        <div class="coupon-code-wrap">
                            <h5 class="code">ganic21abs</h5>
                            <img src="{{ asset('front/img/images/coupon_code.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coupon-area-end -->

    <!-- best-sellers-area -->
    <section class="best-sellers-area pt-85 pb-70">
        <div class="container">
            <div class="row align-items-end mb-40">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Related Products</span>
                        <h2 class="title">From this Collection</h2>
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
                    @foreach($products->where('category_id', $product->category->id) as $product)
                        <div class="col-3">
                            <div class="sp-product-item mb-20">
                                <div class="sp-product-thumb">
                                    <span class="batch">New</span>
                                    <a href="{{ route('front.show', $product->id) }}">
                                        <img class="holdImg" src="https://arabicawhite.s3.amazonaws.com/afg/{{ $product->image->first()->image }}" alt="">
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
                                    <h6 class="title">
                                        <a href="{{ route('front.show', $product->id) }}">{{ ucfirst($product->name) }}</a></h6>
                                    <span class="product-status @if(!$product->status) text-danger @endif">@if($product->status) In stock @else Out of stock @endif</span>
                                    <div class="sp-cart-wrap">
{{--                                        <form action="#">--}}
{{--                                            <div class="sp-cart-wrap">--}}
{{--                                                <div class="cart-plus-minus">--}}
{{--                                                    <input name="qty" type="text" value="1">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <p>${{ $product->price }}</p>
                                            <div class="mt-2">
                                                <a href="{{ route('front.show', $product->id) }}" style="border-radius: 10px" class="btn" type="submit">View Item</a>
                                            </div>
{{--                                        </form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- best-sellers-area-end -->
@endsection
<script src=""></script>
