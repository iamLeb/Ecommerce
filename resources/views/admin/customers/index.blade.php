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
                                <h4 class="card-title mb-0 flex-grow-1">All Customers</h4>
{{--                                <a href="{{ route('user.create') }}" class="text-end btn btn-primary btn-sm"><i class=" las la-plus"></i> Create New users</a>--}}
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
                                    <th data-ordering="false">Contact</th>
                                    <th data-ordering="false">Name</th>
                                    <th data-ordering="false">Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $count = 15237 @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                       value="option1">
                                            </div>
                                        </th>
                                        <td>{{ $user->contact  }}</td>
                                        <td>{{ ucfirst($user->firstname . ' ' . $user->lastname) }}</td>
                                        <td>{{ ucfirst($user->address .', '. $user->city . ', ' . $user->province) }}</td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <a href="{{ route('customers.show', $user->user_id) }}" class="dropdown-item">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                    View
                                                </a>
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
