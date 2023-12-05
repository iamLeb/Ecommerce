@extends('layouts.back')

@section('content')
    <link href="{{ asset('backend/assets/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Products</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Products</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form method="POST" action="{{ route('product.store') }}" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Product Title</label>
                                    <input type="text" class="form-control" id="product-title-input" placeholder="Enter product title" name="name" required>
                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Price</label>
                                    <div class="input-group has-validation mb-3">
                                        <span class="input-group-text" id="product-price-addon">$</span>
                                        <input min="0" max="1000" step="0.01" name="price" type="number" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Gallery</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <p class="text-muted">Add Product Gallery Images.</p>
                                    <input name="image[]" type="file" multiple>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->


                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Submit</button>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Publish</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Status</label>

                                    <select name="status" class="form-select" id="choices-publish-status-input" data-choices data-choices-search-false>
                                        <option value="1" selected>In Stock</option>
                                        <option value="0">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Categories</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-2"> <a href="{{ route('category.index') }}" class="float-end text-decoration-underline">Add
                                        New</a>Select product category</p>
                                <select class="form-select" id="choices-category-input" name="category_id" data-choices data-choices-search-false>
                                    <option selected disabled>-- Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Short Description</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-2">Add short description for product</p>
                                <textarea name="desc" class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div> <!-- container-fluid -->
    </div>

    <!-- ckeditor -->
    <script src="{{ asset('backend/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ asset('backend/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/ecommerce-product-create.init.js') }}"></script>
@endsection
