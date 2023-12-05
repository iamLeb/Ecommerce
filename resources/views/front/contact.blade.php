@extends('layouts.front')

@section('content')
    <!-- map-area -->
    <div id="map-bg" data-background="{{ asset('front/img/bg/map.jpg') }}"></div>
    <!-- map-area-end -->

    <!-- contact-area -->
    <section class="contact-area pt-90 pb-90">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                        <div class="contact-title mb-25">
                            <h5 class="sub-title">Contact Us</h5>
                            <h2 class="title">Let's Talk Question<span>.</span></h2>
                        </div>
                        <div class="contact-wrap-content">
                            <p>Making for software espially of the relating espeially of the face costa when unknown galley of type and scrambled.</p>
                            <form action="#" class="contact-form">
                                <div class="form-grp">
                                    <label for="name">Your Name <span>*</span></label>
                                    <input disabled type="text" id="name" placeholder="Jon Deo...">
                                </div>
                                <div class="form-grp">
                                    <label for="email">Your Email <span>*</span></label>
                                    <input disabled type="text" id="email" placeholder="info.example@.com">
                                </div>
                                <div class="form-grp">
                                    <label for="message">Your Message <span>*</span></label>
                                    <textarea disabled name="message" id="message" placeholder="Opinion..."></textarea>
                                </div>
                                <div class="form-grp checkbox-grp">
                                    <input disabled type="checkbox" id="checkbox">
                                    <label for="checkbox">Don’t show your email address</label>
                                </div>
                                <button style="cursor: no-drop" disabled type="button" class="btn rounded-btn">Send Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="contact-info-wrap">
                            <div class="contact-img">
                                <img src="{{ asset('front/img/images/contact_img.png') }}" alt="">
                            </div>
                            <div class="contact-info-list">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="content">
                                            <p>245 Notre Dame Ave, Winnipeg, MB R3B 2G7</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="content">
                                            <p>584 Pembina Hwy, Winnipeg, MB R3M 2M5</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="content">
                                            <p>+1 (204) (963) 3880</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="content">
                                            <p>+1 (204) (963) 3880</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                        <div class="content">
                                            <p><a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-social">
                                <ul>
                                    <li><a style="cursor: no-drop" disabled><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a style="cursor: no-drop" disabled><i class="fab fa-twitter"></i></a></li>
                                    <li><a style="cursor: no-drop" disabled><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
