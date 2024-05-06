@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('vendor-style')

@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
'resources/assets/vendor/libs/select2/select2.scss',


])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/select2/select2.js',



])
@endsection

@section('page-script')
@vite([
'resources/assets/js/forms-pickers.js',
'resources/assets/js/forms-selects.js',
'resources/assets/js/form-basic-inputs.js',
])
@endsection

@section('content')
<!-- <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
</h4> -->

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Customers</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Total Apps</th>
                    <th>Next App</th>
                    <th>Time To Next</th>
                    <th>Laravel User ID</th>
                    <th>Registered On</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="ID" id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search By Name"
                                    id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Phone..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search By Email"
                                    id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Filter By Date" id="flatpickr-range" />
                        </div>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar"
                                    class="rounded-circle">Gloria
                            </li>
                        </ul>
                    </td>
                    <td>+112341234</td>
                    <td>1324@wteo.com</td>
                    <td>1</td>
                    <td>n/a</td>
                    <td><span class="badge bg-label-primary me-1">Past</span></td>
                    <td><a href="#">33360</a></td>
                    <td>May 1, 2024</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar"
                                    class="rounded-circle">Gloria
                            </li>
                        </ul>
                    </td>
                    <td>+112341234</td>
                    <td>1324@wteo.com</td>
                    <td>1</td>
                    <td>n/a</td>
                    <td><span class="badge bg-label-primary me-1">Past</span></td>
                    <td><a href="#">33360</a></td>
                    <td>May 1, 2024</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>












@endsection
