@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="https://ui-avatars.com/api/?name={{ $user->firstname.$user->lastname }}" alt="" class="profile-wid-img">
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="https://ui-avatars.com/api/?name={{ $user->firstname.$user->lastname }}" alt="user-img" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{ $user->firstname . ' ' . $user->lastname }}</h3>
                            <p class="text-white text-opacity-75">{{ $user->contact }}</p>
                            <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $user->address . ', ' . $user->city . ', ' . $user->province }}</div>
                                <div>
                                    <i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>Canada
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-last order-lg-0">
                        <div class="row text text-white-50 text-center">
                            <div class="col-lg-12 col-4">
                                <div class="p-2">
                                    <h4 class="text-white mb-1">{{ $orders->where('status', 0)->count() }}</h4>
                                    <p class="fs-14 mb-0">Pending&nbsp;Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Info</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Name</th>
                                                            <td class="text-muted">{{ $user->firstname . ' ' . $user->lastname }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Contact</th>
                                                            <td class="text-muted">{{ $user->contact }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Location</th>
                                                            <td class="text-muted">{{ $user->address . ', ' . $user->city . ', ' . $user->province }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Joined</th>
                                                            <td class="text-muted">24 Nov 2021</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-5">Orders
                                                    <span class="float-end">
                                                        <form action="{{ route('order.status.all', $user->user_id) }}">
                                                            <button class="m-1 btn btn-primary btn-sm">Mark all as delivered</button>
                                                        </form>
                                                    </span>
                                                </h5>
                                                <!-- Swiper -->
                                                <div class="swiper project-swiper mt-n4 swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                    <div class="d-flex justify-content-end gap-2 mb-2">
                                                        <div class="slider-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c75e2dcb1e3fdfac" aria-disabled="true">
                                                            <div class="avatar-title fs-18 rounded px-1 shadow">
                                                                <i class="ri-arrow-left-s-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="slider-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c75e2dcb1e3fdfac" aria-disabled="false">
                                                            <div class="avatar-title fs-18 rounded px-1 shadow">
                                                                <i class="ri-arrow-right-s-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-wrapper" id="swiper-wrapper-c75e2dcb1e3fdfac" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                        @foreach($orders as $order)
                                                            <div data-bs-toggle="modal" data-bs-target="#api-key-modal" class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 315.667px; margin-right: 25px;">
                                                                <div class="card profile-project-card profile-project-success mb-0">
                                                                    <div class="card-body p-4">
                                                                        <div class="d-flex">
                                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                                <h5 class="fs-14 text-truncate mb-1">
                                                                                    <a href="#" class="text-body">{{ ucfirst($order->name . ' - $' . $order->price) }}</a>
                                                                                </h5>
                                                                                <p class="text-muted mb-0">Created: <span class="fw-semibold text-body">{{ $order->created_at->toFormattedDateString() }}</span></p>
                                                                                <p class="text-muted mb-0">Image: <img width="40%" src="{{ asset('images/' . $order->image) }}" alt=""></p>
                                                                            </div>
                                                                            <div class="flex-shrink-0 ms-2">
                                                                                <div class="badge @if(+$order->status) bg-success-subtle text-success @else bg-warning-subtle text-warning @endif fs-10"> @if(+$order->status) Delivered @else <progress></progress> @endif</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end card body -->
                                                                </div>
                                                                <!-- end card -->
                                                                @if(!+$order->status)
                                                                    <form action="{{ route('order.status', $order->id) }}">
                                                                        <button class="m-1 btn btn-primary btn-sm">Mark as delivered</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                                </div>
                                            </div>
                                            <!-- end card body -->

                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div>
    <!-- JAVASCRIPT -->
    <!-- swiper js -->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- profile init js -->
    <script src="{{ asset('backend/assets/js/pages/profile.init.js') }}"></script>
@endsection
