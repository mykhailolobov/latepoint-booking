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
    <h5 class="card-header">Appointments</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service</th>
                    <th>Date/Time</th>
                    <th>Time Left</th>
                    <th>Aganet</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>Crated On</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Code</th>
                    <th>Duration</th>
                    <th>Source ID</th>
                    <th>Payment Method</th>
                    <th>Payment Portion</th>
                    <th>Price</th>
                    <th>Coupon Code</th>
                    <th>Coupon Discount</th>
                    <th>Total Attendees</th>
                </tr>
                <tr>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th><select id="select2Basic9" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>All Services</option>
                            <option>Tooth Whitening</option>
                            <option>Imvisilingn Braces</option>
                            <option>Group Booking</option>
                            <option>Pocelain Crown</option>
                            <option>Root Canal Therapy</option>
                            <option>Gum Decease</option>
                        </select></th>
                    <th>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Filter Date" id="flatpickr-range" />
                        </div>
                    </th>
                    <th><select id="select2Basic10" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Upcoming</option>
                            <option>Past</option>
                        </select></th>
                    <th> <select id="select2Basic11" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>All Agents</option>
                            <option>John Mayers</option>
                            <option>Kim collins</option>
                            <option>Ben Stones</option>
                            <option>Clark Simeone</option>
                        </select></th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th><select id="select2Basic12" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Approved</option>
                            <option>Pending Approval</option>
                            <option>Cancelded</option>
                            <option>No Show</option>
                            <option>Completed</option>
                        </select></th>
                    <th><select id="select2Basic13" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Not Paid</option>
                            <option>Partially Paid</option>
                            <option>Processing</option>
                            <option>Fully paid</option>
                        </select></th>
                    <th>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Filter Date" id="flatpickr-range" />
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th></th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Porcelain
                            Crown</span></td>
                    <td>May 1, 20244 10:00am</td>
                    <td><span class="badge bg-label-primary me-1">Past</span></td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                            </li>
                        </ul>
                    </td>
                    <td><span class="badge bg-label-primary me-1">Approved</span></td>
                    <td><span class="badge bg-label-primary me-1">Processing</span></td>
                    <td>May 1, 20244 10:00am</td>
                    <td>1324@wteo.com</td>
                    <td>+112341234</td>
                    <td>RCUFRS6</td>
                    <td>30</td>
                    <td></td>
                    <td>local</td>
                    <td>deposit</td>
                    <td>$40</td>
                    <td></td>
                    <td>0.0000</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Group
                            Booking</span></td>
                    <td>May 1, 20244 10:00am</td>
                    <td><span class="badge bg-label-primary me-1">Past</span></td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                            </li>
                        </ul>
                    </td>
                    <td><span class="badge bg-label-primary me-1">Approved</span></td>
                    <td><span class="badge bg-label-primary me-1">Processing</span></td>
                    <td>May 1, 20244 10:00am</td>
                    <td>1324@wteo.com</td>
                    <td>+112341234</td>
                    <td>RCUFRS6</td>
                    <td>30</td>
                    <td></td>
                    <td>local</td>
                    <td>deposit</td>
                    <td>$40</td>
                    <td></td>
                    <td>0.0000</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>








@endsection