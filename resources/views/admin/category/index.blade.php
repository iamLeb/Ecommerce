@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Categories</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">categories</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="card">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <input type="text" class="form-control" id="searchMemberList" placeholder="Search for category name...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-sm-auto ms-auto">
                            <div class="list-grid-nav hstack gap-1">
                                <button class="btn btn-success addMembers-modal" data-bs-toggle="modal" data-bs-target="#addmemberModal"><i class="ri-add-fill me-1 align-bottom"></i> Add Category</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                    {{--Display the lists of categories--}}
                        <div class="row">
                            @if($categories->count() === 0)
                                <div class="py-4 mt-4 text-center" id="noresult" >
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                                    <h5 class="mt-4">Sorry! No Category Found</h5>
                                </div>
                            @else
                                @foreach($categories as $category)
                                    <div class="col-sm-6 col-xl-3">
                                        <!-- Simple card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-2 text-center border-bottom pb-2">{{ ucfirst($category->name) }}</h4>
                                                <p class="card-text">{{ $category->desc }}</p>
                                                <div class="row">
                                                    <div class="col-md-6 text-start">
                                                        <button class="btn btn-light editMembers-modal" data-bs-toggle="modal" data-bs-target="#editmemberModal_{{ $category->id }}"><i class="mdi mdi-pen"></i> Edit</button>
                                                    </div>
                                                    <div class="col-md-6 text-end">
                                                        <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger"><i class="mdi mdi-trash-can"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->

                                        <!-- Update category -->
                                        <div class="modal fade" id="editmemberModal_{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0">

                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('category.update', $category->id) }}" autocomplete="off" id="memberlist-form" class="needs-validation" >
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <input type="hidden" id="memberid-input" class="form-control" value="">
                                                                    <div class="px-1 pt-1">
                                                                        <div class="modal-team-cover position-relative mb-0 mt-n4 mx-n4 rounded-top overflow-hidden">
                                                                            <img src="{{ asset('backend/assets/images/small/img-9.jpg') }}" alt="" id="cover-img" class="img-fluid">

                                                                            <div class="d-flex position-absolute start-0 end-0 top-0 p-3">
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="modal-title text-white" id="createMemberLabel">Update Category</h5>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="d-flex gap-3 align-items-center">
                                                                                        <div>
                                                                                            <label for="cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Select Cover Image">
                                                                                                <div class="avatar-xs">
                                                                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                                        <i class="ri-image-fill"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </label>
                                                                                            <input  class="form-control d-none" value="" id="cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                                        </div>
                                                                                        <button type="button" class="btn-close btn-close-white"  id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center mb-4 mt-n5 pt-2">
                                                                        <div class="position-relative d-inline-block">
                                                                            <div class="avatar-lg">
                                                                                <div class="avatar-title bg-light rounded-circle">
                                                                                    <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" id="member-img" class="avatar-md rounded-circle h-auto" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="name" class="form-label">Category Name</label>
                                                                        <input value="{{ $category->name }}" type="text" class="form-control" id="categoryName" placeholder="Enter Category Name" name="name" required>
                                                                        <div class="invalid-feedback">Please Enter a category name.</div>
                                                                    </div>

                                                                    <div class="mb-4">
                                                                        <label for="categoryDesc" class="form-label">Category Description</label>
                                                                        <textarea name="desc" id="categoryDesc" cols="30" class="form-control"
                                                                                  rows="10">{{ $category->desc }}</textarea>
                                                                    </div>

                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success" id="addNewMember">Update Category</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--end modal-content-->
                                            </div>
                                            <!--end modal-dialog-->
                                        </div>
                                        <!--end modal-->
                                    </div><!-- end col -->
                                @endforeach
                            @endif
                        </div>
                    {{--End of categories--}}
                        <!-- Create Category Modal -->
                        <div class="modal fade" id="addmemberModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0">

                                    <div class="modal-body">
                                        <form enctype="multipart/form-data" method="post" action="{{ route('category.store') }}" autocomplete="off" id="memberlist-form" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="hidden" id="memberid-input" class="form-control" value="">
                                                    <div class="px-1 pt-1">
                                                        <div class="modal-team-cover position-relative mb-0 mt-n4 mx-n4 rounded-top overflow-hidden">
                                                            <img src="{{ asset('backend/assets/images/small/img-9.jpg') }}" alt="" id="cover-img" class="img-fluid">

                                                            <div class="d-flex position-absolute start-0 end-0 top-0 p-3">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="modal-title text-white" id="createMemberLabel">Create New Category</h5>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3 align-items-center">
                                                                        <div>
                                                                            <label for="cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Select Cover Image">
                                                                                <div class="avatar-xs">
                                                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                        <i class="ri-image-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </label>
                                                                            <input class="form-control d-none" value="" id="cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                        <button type="button" class="btn-close btn-close-white"  id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mb-4 mt-n5 pt-2">
                                                        <div class="position-relative d-inline-block">
                                                            <div class="avatar-lg">
                                                                <div class="avatar-title bg-light rounded-circle">
                                                                    <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" id="member-img" class="avatar-md rounded-circle h-auto" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Category Name</label>
                                                        <input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name" name="name" required>
                                                        <div class="invalid-feedback">Please Enter a category name.</div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="form-label">Category Image</label>
                                                        <input name="photo" type="file" class="form-control" id="designation" placeholder="Enter Category Image" required>
                                                        <div class="invalid-feedback">Please Enter a Category Image.</div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="categoryDesc" class="form-label">Category Description</label>
                                                        <textarea name="desc" id="categoryDesc" cols="30" class="form-control"
                                                                  rows="10"></textarea>
                                                    </div>

                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="addNewMember">Add Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end modal-content-->
                            </div>
                            <!--end modal-dialog-->
                        </div>
                        <!--end modal-->

                    </div>
                </div><!-- end col -->
            </div>
            <!--end row-->
        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
@endsection
