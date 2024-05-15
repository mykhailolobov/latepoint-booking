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
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.scss',
'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.scss',
'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.scss',
'resources/assets/vendor/libs/pickr/pickr-themes.scss',
'resources/assets/vendor/libs/dropzone/dropzone.scss'
])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js',
'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js',
'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js',
'resources/assets/vendor/libs/pickr/pickr.js',
'resources/assets/vendor/libs/dropzone/dropzone.js'
])
@endsection

@section('page-script')
@vite([
'resources/assets/js/forms-pickers.js',
'resources/assets/js/forms-selects.js',
'resources/assets/js/ui-cards-analytics.js',
'resources/assets/js/forms-file-upload.js'
])
@endsection
@section('content')

<link href="{{asset('/assets/css/addcustomer_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4">
    <div class="card-header mb-0">
            <h4 class="m-0 me-2">New Customer</h4>
            <hr>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">General Information</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="d-flex mb-3">
                    <div class="col-lg-6 px-3">
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="First Name" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-lg-6 px-3">
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Last Name" aria-describedby="defaultFormControlHelp" />
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-6 px-3">
                        <input type="email" class="form-control" id="defaultFormControlInput" placeholder="Email Address" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-lg-6 px-3">
                        <!-- TODO -->
                        <!-- Phone Number -->
                    </div>
                </div>    
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <textarea class="form-control" id="defaultFormControlInput" placeholder="Notes by Customer" aria-describedby="defaultFormControlHelp" ></textarea>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <textarea class="form-control" id="defaultFormControlInput" placeholder="Notes by admins, only visible to admins" aria-describedby="defaultFormControlHelp" ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
