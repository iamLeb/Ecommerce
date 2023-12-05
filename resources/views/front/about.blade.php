@extends('layouts.front')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- ingredients-area -->
    <section class="ingredients-area pt-90 pb-90">
        <div class="container">
            <div class="ingredients-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-7">
                        <div class="ingredients-img">
                            <img src="{{ asset('front/img/images/support_img.png') }}" alt="">
                            <div class="active-years">
                                <h2 class="title">6+ <span>Years</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="ingredients-content-wrap">
                            <div class="ingredients-section-title">
                                <span class="sub-title">ingredients</span>
                                <h2 class="title">{{ env('APP_NAME') }} Engages in General Range</h2>
                            </div>
                            <p>
                                {{ env('APP_NAME') }} is a unique importer of quality products from Africa and other places around the world.
                                <br>
                                <br>
                                With strong diversity of local support of African, Indian, Caucasian, Asian communities, we are able to offer a wide range of quality products.
                                <br>
                                <br>
                                We are ever committed, dedicated with great focus and determination to keep a consistent high level of quality services to all our clients.

                                <br>
                                <br>
                                Our core vision and mission is to keep advancing into new horizons.
                            </p>
                            <div class="ingredients-fact">
                                <ul>
                                    <li>
                                        <div class="icon"><img src="{{ asset('front/img/icon/ing_icon01.png') }}" alt=""></div>
                                        <div class="content">
                                            <h4>Best</h4>
                                            <span>Top Grocery store</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="{{ asset('front/img/icon/ing_icon02.png') }}" alt=""></div>
                                        <div class="content">
                                            <h4>100%</h4>
                                            <span>Customer Satisfaction</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ingredients-btn-wrap">
                                <a href="{{ route('front.all') }}" class="btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ingredients-area-end -->

    <!-- services-area -->
    <section class="services-area services-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="services-section-title text-center mb-55">
                            <h2 class="title">What We Provide?</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="icon"><i class="flaticon-like-1"></i></div>
                            <div class="content">
                                <h5>Daily Deals Discount</h5>
                                <p>Extra discounts and exclusive offers for customers on our online platform.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <a href="contact.html" class="services-link"></a>
                            <div class="icon"><i class="flaticon-return"></i></div>
                            <div class="content">
                                <h5>LOADING...<span class="new">NEW</span></h5>
                                <p>Under COnstruction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <a href="contact.html" class="services-link"></a>
                            <div class="icon"><i class="flaticon-delivery"></i></div>
                            <div class="content">
                                <h5>LOADING...</h5>
                                <p>Under Construction</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <a href="contact.html" class="services-link"></a>
                            <div class="icon"><i class="flaticon-clutch-disc"></i></div>
                            <div class="content">
                                <h5>LOADING</h5>
                                <p>Under Construction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <a href="contact.html" class="services-link"></a>
                            <div class="icon"><i class="flaticon-settings"></i></div>
                            <div class="content">
                                <h5>LOADING...<span class="new">NEW</span></h5>
                                <p>Under Construction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <a href="contact.html" class="services-link"></a>
                            <div class="icon"><i class="flaticon-online-service"></i></div>
                            <div class="content">
                                <h5>LOADING</h5>
                                <p>Under Construction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-emd -->

    <!-- newsletter-area -->
    <section class="newsletter-area pt-90 pb-90">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrap">
                            <h2 class="title">Wanna be the first to get latest <span>deals and offers?</span></h2>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input disabled type="email" style="cursor: no-drop" placeholder="Email address">
                                    <button disabled style="cursor: no-drop" class="btn">subscribe</button>
                                </form>
                            </div>
                            <img src="{{ asset('front/img/images/newsletter_shape01.png') }}" alt="" class="newsletter-shape top-shape wow fadeInDownBig" data-wow-delay=".3s">
                            <img src="{{ asset('front/img/images/newsletter_shape02.png') }}" alt="" class="newsletter-shape bottom-shape wow fadeInUpBig" data-wow-delay=".3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

    <!-- online-support-area -->
    <section class="online-support-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="online-support-img">
                            <img src="{{ asset('front/img/images/support_img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="online-support-content">
                            <h2 class="title">AFG Online Support</h2>
                            <p>LOADING...</p>
                            <div class="support-info-wrap">
                                <ul>
                                    <li>
                                        <div class="support-info-item">
                                            <p>Around the clock support</p>
                                            <h2><i class="flaticon-24-hour-service"></i> 24/7</h2>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="support-info-item">
                                            <p>customer happiness rating</p>
                                            <h2><i class="flaticon-happy-1"></i> 98.9%</h2>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- online-support-area-end -->
@endsection
