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
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss'
])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js'
])
@endsection

@section('page-script')
@vite([
'resources/assets/js/forms-selects.js',
'resources/assets/js/ui-cards-analytics.js',
])
@endsection
@section('content')

<!-- <link href="http://localhost:8000/assets/custom.css" rel="stylesheet"> -->

<style type="text/css">
    .card-header {
        border-bottom: 1px solid #f0f1f5;
    }
    .card-body {
        padding-top: 24px!important;
    }
    .latepoint-message.latepoint-message-subtle {
        padding: 10px 15px;
        font-weight: 500;
        margin-bottom: 20px;
        background: #f9f9f9;
        color: #8e99bd;
        border: 2px solid #e7e7ef;
    }
    .latepoint-message {
        border-radius: 6px;
    }
</style>

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Create New Agent</h4>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">General Information</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="First Name" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Last Name" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Display Name" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <input type="email" class="form-control" id="defaultFormControlInput" placeholder="Email Address" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Phone Number" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>    
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Connect to WP User</label>
                            <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                <option>Select User</option>
                                <option>Sandbox Agent</option>
                                <option>The Godfather</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Status</label>
                            <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                <option>Active</option>
                                <option>Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Additional Contact Information</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex mb-3 col-lg-12 px-3">
                        <div class="latepoint-message latepoint-message-subtle">
                            If you need to notify multiple persons about the appointment, you can list additional email addresses and phone numbers to send notification emails and sms to. You can list multiple numbers and emails separated by commas.
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-lg-6 px-3">
                            <input type="email" class="form-control" id="defaultFormControlInput" placeholder="Additional Email Addresses" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-6 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Additional Phone Numbers" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
