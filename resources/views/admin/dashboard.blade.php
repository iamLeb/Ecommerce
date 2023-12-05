@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Hello, {{ auth()->user()->name }}!</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Products</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="0">0</span> </h4>
                                                <a href="{{ route('product.index') }}" class="text-decoration-underline">View All Products</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success rounded fs-3">
                                                    <i class="bx bx-dollar-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Categories</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="0">0</span></h4>
                                                <a href="{{ route('category.index') }}" class="text-decoration-underline">View all Categories</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info rounded fs-3">
                                                            <i class="bx bx-shopping-bag"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div> <!-- end row-->
                        <!--datatable css-->
                        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
                        <!--datatable responsive css-->
                        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

                        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Create New Product</h4>
                                            <a href="{{ route('product.create') }}" class="text-end btn btn-primary btn-sm"><i class=" las la-plus"></i> Create New Products</a>
                                        </div><!-- end card header -->
                                    </div>
                                    <div class="card-body">
                                        <table id="example"
                                               class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                               style="width:100%">
                                            <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                               value="option">
                                                    </div>
                                                </th>
                                                <th data-ordering="false">SKU</th>
                                                <th data-ordering="false">Product Name</th>
                                                <th data-ordering="false">Product Price</th>
                                                <th>Create Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count = 15237 @endphp
                                            @foreach($products as $product)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                                   value="option1">
                                                        </div>
                                                    </th>
                                                    <td>{{ $count++ . $product->id}}</td>
                                                    <td><a href="{{ route('product.show', $product->id) }}">{{ ucfirst($product->name) }}</a></td>
                                                    <td>${{ ucfirst($product->price) }}</td>
                                                    <td>{{ $product->created_at->toFormattedDateString() }}</td>
                                                    <td><span class="badge @if($product->status) bg-success @else bg-danger @endif">@if($product->status) In-Stock @else out-of-stock @endif</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i
                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i
                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.tablefooter')
                    </div> <!-- end .h-100-->

                </div> <!-- end col -->

                <div class="col-auto layout-rightside-col">
                    <div class="overlay"></div>
                    <div class="layout-rightside">
                        <div class="card h-100 rounded-0">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-0 text-uppercase fw-semibold">Recent Activity</h6>
                                </div>
                                <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                    <div class="acitivity-timeline acitivity-main">
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-success-subtle text-success rounded-circle shadow">
                                                    <i class="ri-shopping-cart-2-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                                <p class="text-muted mb-1">Product noise evolve smartwatch </p>
                                                <small class="mb-0 text-muted">02:14 PM Today</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-danger-subtle text-danger rounded-circle shadow">
                                                    <i class="ri-stack-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Added new <span class="fw-semibold">style collection</span></h6>
                                                <p class="text-muted mb-1">By Nesta Technologies</p>
                                                <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-10.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                </div>
                                                <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small></p>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                <p class="text-muted mb-1">Allow users to like products in your WooCommerce store.</p>
                                                <small class="mb-0 text-muted">25 Dec, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary shadow">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Today offers by <a href="apps-ecommerce-seller-details.html" class="link-secondary">Digitech Galaxy</a></h6>
                                                <p class="text-muted mb-2">Offer is valid on orders of Rs.500 Or above for selected products only.</p>
                                                <small class="mb-0 text-muted">12 Dec, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-danger-subtle text-danger shadow">
                                                        <i class="ri-bookmark-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Favorite Product</h6>
                                                <p class="text-muted mb-2">Esther James have Favorite product.</p>
                                                <small class="mb-0 text-muted">25 Nov, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary shadow">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                                <p class="text-muted mb-0">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                <small class="mb-0 text-muted">22 Oct, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-info-subtle text-info shadow">
                                                        <i class="ri-line-chart-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                                <small class="mb-0 text-muted">15 Oct</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                                <p class="text-muted mb-2 fst-italic">" A product that has reviews is more likable to be sold than a product. "</p>
                                                <small class="mb-0 text-muted">26 Aug, 2021</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 mt-2">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Top 10 Categories
                                    </h6>

                                    <ol class="ps-3 text-muted">
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Mobile & Accessories <span class="float-end">(10,294)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Desktop <span class="float-end">(6,256)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Electronics <span class="float-end">(3,479)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Home & Furniture <span class="float-end">(2,275)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Grocery <span class="float-end">(1,950)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Fashion <span class="float-end">(1,582)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Appliances <span class="float-end">(1,037)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Beauty, Toys & More <span class="float-end">(924)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Food & Drinks <span class="float-end">(701)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Toys & Games <span class="float-end">(239)</span></a>
                                        </li>
                                    </ol>
                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Categories</a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Products Reviews</h6>
                                    <!-- Swiper -->
                                    <div class="swiper vertical-swiper" style="height: 250px;">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded shadow">
                                                                    <img src="assets/images/companies/img-1.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> " Great product and looks great, lots of features. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Force Medicines</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded shadow">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> " Amazing template, very easy to understand and manipulate. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Henry Baird</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded shadow">
                                                                    <img src="assets/images/companies/img-8.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> "Very beautiful product and Very helpful customer service."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Zoetic Fashion</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded shadow">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">" The product is very beautiful. I like it. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Nancy Martino</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Customer Reviews</h6>
                                    <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="fs-16 align-middle text-warning">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h6 class="mb-0">4.5 out of 5</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-muted">Total <span class="fw-medium">5.50k</span> reviews</div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">5 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-success-subtle animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">2758</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">4 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-success-subtle animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">1063</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">3 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-warning-subtle animated-progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">997</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">2 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-success-subtle animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">227</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">1 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-danger-subtle animated-progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">408</h6>
                                                </div>
                                            </div>
                                        </div><!-- end row -->
                                    </div>
                                </div>

                                <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                                    <div class="card-body">
                                        <img src="assets/images/giftbox.png" alt="">
                                        <div class="mt-4">
                                            <h5>Invite New Seller</h5>
                                            <p class="text-muted lh-base">Refer a new seller to us and earn $100 per refer.</p>
                                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i> Invite Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end .rightbar-->

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
