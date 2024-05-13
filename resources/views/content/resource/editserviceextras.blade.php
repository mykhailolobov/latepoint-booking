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

<link href="{{asset('/assets/css/createservices_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Edit Service Extra</h4>
            <hr>
        </div>
        <div class="col-md-12 d-flex">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Basic Information</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="mb-3">
                            <div class="col-lg-12 px-3 mb-3">
                                <label for="selectpickerBasic" class="form-label">Service Extra Name</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Service Extra Name" aria-describedby="defaultFormControlHelp" value="Recovery Mask" />
                            </div>
                            <div class="col-lg-12 d-flex mb-3">
                                <div class="col-lg-4 px-3">
                                    <label for="selectpickerBasic" class="form-label">Duration(minutes)</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Duration(minutes)" aria-describedby="defaultFormControlHelp" value="30" />
                                </div>
                                <div class="col-lg-4 px-3 mb-3">
                                    <label for="selectpickerBasic" class="form-label">Charge Amount</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="$0.00" value="$10.00" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-lg-4 px-3 mb-3">
                                    <label for="selectpickerBasic" class="form-label">Maximum Quantity</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Maximum Quantity" value="5" aria-describedby="defaultFormControlHelp" />
                                </div>
                            </div>
                            <div class="col-lg-12 px-3 mb-3">
                                <label for="selectpickerBasic" class="form-label">Status</label>
                                <div class="d-flex">
                                    <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                        <option selected>Active</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 px-3 mb-3">
                                <label for="selectpickerBasic" class="form-label">Short Description</label>
                                <div class="d-flex">
                                    <textarea class="form-control" rows="6" placeholder="Short Description">
                                        
                                    </textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 px-3 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Multiply cost of this service extra by number of attendees
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <h5 class="card-header">Media</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex col-lg-12 px-3">
                                <div class="col-lg-12" style="text-align: center;">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                                        <div class="dz-message needsclick">
                                            Selection Image
                                        </div>
                                        <span>This image will be used as a background image of the service extra tile on booking form</span>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="d-flex justify-content-between card-header-11">
                    <h5 class="card-header">Connected Services</h5>
                    <div class="py-4 px-5">
                        <label class="form-check-label custom-option-content selectAll" for="selectAll">
                            <input class="form-check-input" type="checkbox" value="" id="selectAll" />
                            <span class="custom-option-header">
                                <span class="h6 mb-0">Select All</span>
                            </span>
                        </label>
                    </div>
                </div>
                    
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="service_extra_1">
                                    <input class="form-check-input" type="checkbox" value="" id="service_extra_1" checked />
                                    <span class="custom-option-header">
                                        <img src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/service1-150x150.png" class="w-px-30 border-50" />
                                        <span class="h6 mb-0">Teeth Whitening</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="service_extra_2">
                                    <input class="form-check-input" type="checkbox" value="" id="service_extra_2" checked />
                                    <span class="custom-option-header">
                                        <img src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/service3-150x150.png" class="w-px-30 border-50" />
                                        <span class="h6 mb-0">Invisilign Braces</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="service_extra_3">
                                    <input class="form-check-input" type="checkbox" value="" id="service_extra_3" checked />
                                    <span class="custom-option-header">
                                        <img src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/service4-150x150.png" class="w-px-30 border-50" />
                                        <span class="h6 mb-0">Group Booking</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="service_extra_4">
                                    <input class="form-check-input" type="checkbox" value="" id="service_extra_4" checked />
                                    <span class="custom-option-header">
                                        <img src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/service2-150x150.png" class="w-px-30 border-50" />
                                        <span class="h6 mb-0">Porcelain Crown</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="service_extra_5">
                                    <input class="form-check-input" type="checkbox" value="" id="service_extra_5" checked />
                                    <span class="custom-option-header">
                                        <img src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/service3-150x150.png" class="w-px-30 border-50" />
                                        <span class="h6 mb-0">Root Canal Therapy</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <button class="btn btn-primary add-serviceextra" type="button">Save Changes</button>
            <button class="btn btn-danger del-serviceextra" type="button">Delete Service Extra</button>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.custom-schedule-wrapper').hide();

        $('.customCheckTemp1').click(function() {
            var set_custom_schedule_status = $('#customCheckTemp1')[0].checked;
            if (set_custom_schedule_status == true) {
                $('.first_section').hide();
                $('.custom-schedule-wrapper').show();
            }else{
                $('.first_section').show();
                $('.custom-schedule-wrapper').hide();
            }
        });

        $('.selectAll').click(function() {
            var selectAll_status = $('#selectAll')[0].checked;
            if (selectAll_status == true) {
                $('#service_extra_1').attr('checked', true);
                $('#service_extra_2').attr('checked', true);
                $('#service_extra_3').attr('checked', true);
                $('#service_extra_4').attr('checked', true);
                $('#service_extra_5').attr('checked', true);
            }else{
                $('#service_extra_1').attr('checked', false);
                $('#service_extra_2').attr('checked', false);
                $('#service_extra_3').attr('checked', false);
                $('#service_extra_4').attr('checked', false);
                $('#service_extra_5').attr('checked', false);
            }
        });
    });
</script>

@endsection
