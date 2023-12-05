@extends('layouts.back')
@section('content')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- Left Sidebar End -->
    <div class="page-content">
        <div class="container-fluid">
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
        </div>
        <!-- container-fluid -->
    </div>
    @include('layouts.tablefooter')
@endsection

