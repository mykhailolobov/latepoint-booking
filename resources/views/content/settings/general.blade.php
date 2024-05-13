@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

@section('page-style')
@vite([
'resources/assets/vendor/scss/pages/card-analytics.scss'

])
@endsection

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.scss',

])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',

])
@endsection

@section('page-script')
@vite([
'resources/assets/js/ui-cards-analytics.js',
])
@endsection
@section('content')

<link href="{{asset('/assets/css/settings.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-4 d-flex">
            <a href="{{ url('/settings/general') }}" class="agent-status-active text-center service_title mx-2">
                <h4 class="m-0 me-2">General</h4>
            </a>
            <a href="{{ url('/settings/work_periods') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Schedule</h4>
            </a>
            <a href="{{ url('/settings/tax') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Tax</h4>
            </a>
            <a href="{{ url('/settings/steps') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Steps</h4>
            </a>
            <a href="{{ url('/settings/payments') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Payments</h4>
            </a>
            <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Notifications</h4>
            </a>
            <a href="{{ url('/settings/roles') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Roles</h4>
            </a>
            <a href="{{ url('/settings/system') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">System</h4>
            </a>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Appointment Settings</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <label for="settings_default_booking_status" class="form-label">Default status</label>
                            <select name="settings[default_booking_status]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Statuses that block timeslot</label>
                            <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <button class="btn btn-primary add-agent" type="button">Add Agent</button>
        </div>
    </div>
</div>

@endsection
