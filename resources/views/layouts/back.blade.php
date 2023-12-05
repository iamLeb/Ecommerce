<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Secured Dashboard | {{ env('APP_NAME') }} - Admin & Dashboard Secure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Designed by iamleb" name="description" />
    <meta content="Caleb" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('backend/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('backend/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('backend/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Begin page -->
@include('alerts')
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="17">
                        </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="17">
                        </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                            <span class="mdi mdi-magnify search-widget-icon"></span>
                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                            <div data-simplebar style="max-height: 320px;">
                                <!-- item-->
                                <div class="dropdown-header">
                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                </div>
                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{ asset('backend/assets/images/users/avatar-2.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">Angela Bernier</h6>
                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">David Grasso</h6>
                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{ asset('backend/assets/images/users/avatar-5.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">Mike Bunch</h6>
                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center pt-3 pb-1">
                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->name }}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">{{ __('Administrator') }}</span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome {{ auth()->user()->name }}!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>

                            <a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item" href="{{ route('logout') }}">
                                <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle" data-key="t-logout">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- removeNotificationModal -->
    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="17">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('home') }}">
                            <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                            <i class="mdi mdi-package"></i> <span data-key="t-dashboards">Products</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLanding">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('product.create') }}" class="nav-link" data-key="t-one-page"> Add Products </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product.index') }}" class="nav-link" data-key="t-nft-landing"> Product Lists </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}" class="nav-link" data-key="t-job">Categories</a>
                                </li>
                            </ul>
                        </div>
                    </li>


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}">--}}
{{--                            <i class="mdi mdi-cart"></i> <span data-key="t-dashboards">Orders</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}">--}}
{{--                            <i class="mdi mdi-family-tree"></i> <span data-key="t-dashboards">Customers</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}">--}}
{{--                            <i class="mdi mdi-account-search-outline"></i> <span data-key="t-dashboards">Reviews</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}">--}}
{{--                            <i class="mdi mdi-cash-fast"></i> <span data-key="t-dashboards">Transactions</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}">--}}
{{--                            <i class="mdi mdi-tag"></i> <span data-key="t-dashboards">Hot Offers </span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="{{ route('home') }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">--}}
{{--                            <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Apps</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse menu-dropdown" id="sidebarApps">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">--}}
{{--                                        Email--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarEmail">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">--}}
{{--                                                    Email Templates--}}
{{--                                                </a>--}}
{{--                                                <div class="collapse menu-dropdown" id="sidebaremailTemplates">--}}
{{--                                                    <ul class="nav nav-sm flex-column">--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"> Ecommerce--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarEcommerce">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders"> Orders </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers"> Sellers </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">Projects--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarProjects">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarTasks">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard"> Kanban Board </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view"> List View </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarCRM">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies"> Companies </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto"> Crypto--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarCrypto">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy & Sell </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My Wallet </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices"> Invoices--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarInvoices">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List View </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-invoices-details.html" class="nav-link" data-key="t-details"> Details </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets"> Support Tickets--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarTickets">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List View </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">--}}
{{--                                        NFT Marketplace--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarnft">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace"> Marketplace </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now"> Explore Now </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live Auction </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details"> Item Details </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections"> Collections </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators"> Creators </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect"> Wallet Connect </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create NFT </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">File Manager</span></a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To Do</span></a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs" data-key="t-jobs"> Jobs</a>--}}
{{--                                    <div class="collapse menu-dropdown" id="sidebarjobs">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-job-statistics.html" class="nav-link" data-key="t-statistics"> Statistics </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists" data-key="t-job-lists">--}}
{{--                                                    Job Lists--}}
{{--                                                </a>--}}
{{--                                                <div class="collapse menu-dropdown" id="sidebarJoblists">--}}
{{--                                                    <ul class="nav nav-sm flex-column">--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-job-lists.html" class="nav-link" data-key="t-list"> List--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-job-grid-lists.html" class="nav-link" data-key="t-grid"> Grid </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-job-details.html" class="nav-link" data-key="t-overview"> Overview</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists" data-key="t-candidate-lists">--}}
{{--                                                    Candidate Lists--}}
{{--                                                </a>--}}
{{--                                                <div class="collapse menu-dropdown" id="sidebarCandidatelists">--}}
{{--                                                    <ul class="nav nav-sm flex-column">--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-job-candidate-lists.html" class="nav-link" data-key="t-list-view"> List View--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a href="apps-job-candidate-grid.html" class="nav-link" data-key="t-grid-view"> Grid View</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-job-application.html" class="nav-link" data-key="t-application"> Application </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-job-new.html" class="nav-link" data-key="t-new-job"> New Job </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-job-companies-lists.html" class="nav-link" data-key="t-companies-list"> Companies List </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="apps-job-categories.html" class="nav-link" data-key="t-job-categories"> Job Categories</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="apps-api-key.html" class="nav-link" data-key="t-api-key">API Key</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">--}}
{{--                            <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse menu-dropdown" id="sidebarLayouts">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="layouts-horizontal.html" class="nav-link" target="_blank" data-key="t-horizontal">Horizontal</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="layouts-detached.html" class="nav-link" target="_blank" data-key="t-detached">Detached</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="layouts-two-column.html" class="nav-link" target="_blank" data-key="t-two-column">Two Column</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="layouts-vertical-hovered.html" class="nav-link" target="_blank" data-key="t-hovered">Hovered</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li> <!-- end Dashboard Menu -->--}}

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Caleb.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by iamLeb
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start backend-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end backend-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('backend/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('backend/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>
</html>
