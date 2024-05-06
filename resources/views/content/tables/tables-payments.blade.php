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
    <h5 class="card-header">Payments</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Token</th>
                    <th>Booking ID</th>
                    <th>Customer</th>
                    <th>Processor</th>
                    <th>Method</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Funds Status</th>
                    <th>Date</th>
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
                                <input class="form-control" type="search" value="Token" id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Booking ID" id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="search" value="Customer Name"
                                    id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th><select id="select2Basic14" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Paypal</option>
                            <option>Stripe</option>
                        </select></th>
                    <th><select id="select2Basic15" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Pay Locally</option>
                            <option>Paypal</option>
                            <option>Stripe Checkout</option>
                            <option>Credit Card</option>
                            <option>iDeal</option>
                        </select></th>
                    <th>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="Amount" value="Customer Name"
                                    id="html5-search-input" />
                            </div>
                        </div>
                    </th>
                    <th><select id="select2Basic16" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Approved</option>
                            <option>Declined</option>
                        </select></th>
                    <th><select id="select2Basic17" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option>Show All</option>
                            <option>Captured</option>
                            <option>Authorized</option>
                            <option>Processing</option>
                            <option>Refunded</option>
                        </select></th>
                    <th>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Filter By Date" id="flatpickr-range" />
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>LFKJDF8539</td>
                    <td>9</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar"
                                    class="rounded-circle">Gloria
                            </li>
                        </ul>
                    </td>
                    <td>stripe</td>
                    <td>local</td>
                    <td>$20</td>
                    <td><span class="badge bg-label-primary me-1">approved</span></td>
                    <td><span class="badge bg-label-primary me-1">captured</span></td>
                    <td>2022-09-05 23:15:13</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Token</td>
                    <td>9</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar"
                                    class="rounded-circle">Cooper
                            </li>
                        </ul>
                    </td>
                    <td>stripe</td>
                    <td>local</td>
                    <td>$20</td>
                    <td><span class="badge bg-label-primary me-1">approved</span></td>
                    <td><span class="badge bg-label-primary me-1">captured</span></td>
                    <td>2022-09-05 23:15:13</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>









@endsection
