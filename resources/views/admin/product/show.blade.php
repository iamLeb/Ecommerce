@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">View Products</a></li>
                                <li class="breadcrumb-item active">Product Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                            <div class="swiper-wrapper">
                                                @foreach($product->image as $image)
                                                    <div class="swiper-slide text-center">
                                                        <img src="{{ asset("images/$image->image") }}" alt="" class="img-fluid d-block" />
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-button-next bg-white shadow"></div>
                                            <div class="swiper-button-prev bg-white shadow"></div>
                                        </div>
                                        <!-- end swiper thumbnail slide -->
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                @foreach($product->image as $image)
                                                    <div class="swiper-slide">
                                                        <div class="nav-slide-item">
                                                            <img src="{{ asset("images/$image->image") }}" alt="" class="img-fluid d-block" />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4>{{ ucfirst($product->name) }}</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div class="text-muted">Seller: <span class="text-body fw-medium">{{ env('APP_NAME') }}</span></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Published : <span class="text-body fw-medium">{{ $product->created_at->toFormattedDateString() }}</span></div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <form onsubmit="return confirm('Are you sure you want to delete this product?')" action="{{ route('product.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button data-bs-toggle="tooltip" data-bs-placement="left" title="Delete" class="btn btn-danger"><i class="mdi mdi-trash-can"></i></button>
                                                    </form>
                                                    <br>
                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-money-dollar-circle-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Price :</p>
                                                            <h5 class="mb-0">${{ $product->price }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-stack-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Status</p>
                                                            <h6 class="mb-0 {{ $product->status ? 'text-success' : 'text-danger' }}">{{ $product->status ? 'In Stock' : 'Out Of Stock' }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="las la-clock"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Date Added</p>
                                                            <h6 class="mb-0">{{ $product->created_at->toFormattedDateString() }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>


                                        <div class="mt-4 text-muted">
                                            <h5 class="fs-14">Description :</h5>
                                            <p>
                                                {{ $product->desc }}
                                            </p>
                                        </div>

                                        <div class="product-content mt-5">
                                            <nav>
                                                <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Specification</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row" style="width: 200px;">Category</th>
                                                                <td>{{ ucfirst($product->category->name) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Brand</th>
                                                                <td>{{ env('APP_NAME') }}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-content -->

                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!--Swiper slider js-->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('backend/assets/js/pages/ecommerce-product-details.init.js') }}"></script>
@endsection
