<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Grocery Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div id="loading-center">
        <h3 style="color: #acabab;">{{ env('APP_NAME') }}</h3>
    </div>
</div>
<!-- preloader-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <!-- header-message -->
    <div class="header-message-wrap">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="top-notify-message">
                        <p>place your complaints (if any) within 24hrs of receiving your delivery</p>
                        <span class="message-remove">&#x2715;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-message-end -->
    <!-- header-search-area-end -->
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <a href="{{ route('cart.index') }}"><div class="mobile-nav-toggler mr-4"><i class="fas fa-cart-plus"></i></div></a>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo d-block d-lg-none">
                                <a href="{{ route('front.index') }}"><img width="30%" src="{{ asset('AFfOOD.png') }}" alt=""></a>
                            </div>

                            <div class="header-category d-none d-lg-block">
                                <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>ALL Categories<i class="fas fa-angle-down"></i></a>
                                <ul class="category-menu">
                                    @foreach($categories as $cat)
                                        <li><a href="{{ route('front.category.product', $cat->id) }}"><i class="flaticon-nut"></i>{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ route('front.index') }}">Home</a></li>
                                    <li><a href="{{ route('front.about') }}">About us</a></li>
                                    <li><a href="{{ route('front.contact') }}">Contact us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Categories</a>
                                        <ul class="submenu">
                                            @foreach($categories as $cat)
                                                <li><a href="{{ route('front.category.product', $cat->id) }}">{{ $cat->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('front.contact') }}">contacts</a></li>
                                    <li><a href="{{ route('front.customer.get.orders') }}">My Orders</a></li>
                                </ul>
                            </div>

                            <div class="header-super-store d-none d-xl-block d-lg-none d-md-block">
                                <div class="dropdown">
                                    <a href="{{ route('cart.index') }}" class="dropdown-toggle"> Cart</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">

                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div style="display: none" class="showAddToCartBtn mt-2 text-center alert alert-success">
                        <i class="flaticon-shopping-cart-empty-side-view"></i>
                        <a href="{{ route('cart.index') }}">View Cart</a>
                    </div>

                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->


<!-- main-area -->
<main>
    @yield('content')
</main>
<!-- main-area-end -->


<!-- footer-area -->
<footer>
    <div class="footer-area gray-bg pt-80 pb-30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="footer-logo mb-25">
                            <a href="index.html"><img width="30%" src="{{ asset('AFfOOD.png') }}" alt=""></a>
                        </div>
                        <div class="footer-contact-list">
                            <ul>
                                <li>
                                    <div class="icon"><i class="flaticon-place"></i></div>
                                    <p>245 Notre Dame Ave, Winnipeg, MB R3B 2G7</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-place"></i></div>
                                    <p>584 Pembina Hwy, Winnipeg, MB R3M 2M5</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-telephone-1"></i></div>
                                    <h5 class="number"><a href="tel:2049633880">call now</a></h5>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-mail"></i></div>
                                    <p><a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></p>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-wall-clock"></i></div>
                                    <p>Loading Hours...</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a><i class="fab fa-facebook-f"></i></a></li>
                                <li><a><i class="fab fa-twitter"></i></a></li>
                                <li><a><i class="fab fa-youtube"></i></a></li>
                                <li><a><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                @foreach($categories as $cat)
                                    <li><a href="{{ route('front.category.product', $cat->id) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title">
                            <h5 class="title">Useful Links</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ route('front.about') }}">About us</a></li>
                                <li><a href="{{ route('cart.index') }}">View Cart</a></li>
                                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget footer-box-widget mb-50">
                        <div class="f-newsletter">
                            <div class="fw-title">
                                <h5 class="title">Newsletter</h5>
                            </div>
                            <form action="#">
                                <input style="cursor: no-drop" type="email" placeholder="Email Address">
                                <button style="cursor: no-drop" disabled><i class="flaticon-send"></i></button>
                            </form>
                            <p>By adding your email, you agree to receive new and updated relating to discount and product availability</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>Copyright © 2023 {{ env('APP_NAME') }} All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-accepted text-center text-md-right">
                        <img src="{{ assert('front/img/images/payment_card.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<!-- JS here -->
<script src="{{ asset('front/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('front/js/slick.min.js') }}"></script>
<script src="{{ asset('front/js/ajax-form.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/aos.js') }}"></script>
<script src="{{ asset('front/js/plugins.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script async src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="module" src="{{ asset('front/js/master.js') }}"></script>
<script type="module" src="{{ asset('front/js/checkout.js') }}"></script>
<script type="module" src="{{ asset('front/js/orders.js') }}"></script>
</body>
</html>
