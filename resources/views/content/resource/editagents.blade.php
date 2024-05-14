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

<link href="{{asset('/assets/css/editagent_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Update Agent</h4>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">General Information</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="col-lg-12 px-3">
                        <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                            <div class="dz-message needsclick">
                                Set Avatar
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-3">
                        
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="First Name" value="John" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Last Name" value="John" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Display Name" value="John" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <input type="email" class="form-control" id="defaultFormControlInput" placeholder="Email Address" value="John@gmail.com" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Phone Number" value="+19855328700" aria-describedby="defaultFormControlHelp" />
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

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Extra Information</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="mb-3 px-3">
                        <div class="col-lg-12 px-3 mb-4">
                            <form action="/upload" class="dropzone needsclick" id="dropzone-basic1">
                                <div class="dz-message needsclick">
                                    Set Bio Image
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Agent Title" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" aria-label="With textarea" placeholder="Bio Text" rows="10"></textarea>
                        </div>
                    </div>

                    <h6 class="card-header-1">Agent Highlights</h6>
                    <div class="d-flex mb-3 col-lg-12 px-3">
                        <div class="latepoint-message latepoint-message-subtle">
                            These value-label pairs will appear on agent information popup. You can enter things like years of experience, or number of clients served, to highlight agent accomplishments.
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-lg-4 px-3">
                            <h6 class="highlight">Highlight #1</h6>
                            <div class="d-flex">
                                <input type="text" class="form-control w-50 mx-2" id="defaultFormControlInput" placeholder="Value" aria-describedby="defaultFormControlHelp" />
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Label" aria-describedby="defaultFormControlHelp" />
                            </div>
                        </div>
                        <div class="col-lg-4 px-3">
                            <h6 class="highlight">Highlight #2</h6>
                            <div class="d-flex">
                                <input type="text" class="form-control w-50 mx-2" id="defaultFormControlInput" placeholder="Value" aria-describedby="defaultFormControlHelp" />
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Label" aria-describedby="defaultFormControlHelp" />
                            </div>
                        </div>
                        <div class="col-lg-4 px-3">
                            <h6 class="highlight">Highlight #3</h6>
                            <div class="d-flex">
                                <input type="text" class="form-control w-50 mx-2" id="defaultFormControlInput" placeholder="Value" aria-describedby="defaultFormControlHelp" />
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Label" aria-describedby="defaultFormControlHelp" />
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <div class="card">
                <h5 class="card-header">Offered Services</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="customCheckTemp37">
                                    <input class="form-check-input" type="checkbox" value="" id="customCheckTemp37" />
                                    <span class="custom-option-header">
                                        <span class="h6 mb-0">Tooth Whitening</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customCheckTemp47">
                                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp47" />
                                <span class="custom-option-header">
                                  <span class="h6 mb-0">Invisilign Braces</span>
                                </span>
                              </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customCheckTemp38">
                                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp38" />
                                <span class="custom-option-header">
                                  <span class="h6 mb-0">Group Booking</span>
                                </span>
                              </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customCheckTemp48">
                                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp48" />
                                <span class="custom-option-header">
                                  <span class="h6 mb-0">Porcelain Crown</span>
                                </span>
                              </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customCheckTemp39">
                                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp39" />
                                <span class="custom-option-header">
                                  <span class="h6 mb-0">Root Canal Therapy</span>
                                </span>
                              </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customCheckTemp49">
                                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp49" />
                                <span class="custom-option-header">
                                  <span class="h6 mb-0">Gum Decease</span>
                                </span>
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="d-flex justify-content-between card-header-11">
                    <h5 class="card-header">Agent Schedule</h5>
                    <div class="py-4 px-5">
                        <label class="form-check-label custom-option-content customCheckTemp1" for="customCheckTemp1">
                            <input class="form-check-input" type="checkbox" value="" id="customCheckTemp1" />
                            <span class="custom-option-header">
                                <span class="h6 mb-0">Set Custom Schedule</span>
                            </span>
                        </label>
                    </div>
                </div>
                    
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="mb-3 col-lg-12 px-3 first_section">
                        <div class="latepoint-message latepoint-message-subtle">
                            This agent is using general schedule which is set in main settings
                        </div>
                    </div>
                    <div class="second_section">
                        <div class="custom-schedule-wrapper">
                            <div class="weekday-schedule-w">
                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Monday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Tuesday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time1" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish1" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Wednesday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time2" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Thursday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time3" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish3" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Friday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time4" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish4" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Saturday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time5" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish5" />
                                        </div>
                                    </div>
                                </div>

                                <div class="ws-head-w">
                                    <div class="d-flex justify-content-between mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Sunday</span>
                                        </label>
                                        <span>08:00AM-05:00PM</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="start_time">
                                            <label for="flatpickr-time" class="form-label">Start Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time6" />
                                        </div>
                                        <div class="finish_time">
                                            <label for="flatpickr-time" class="form-label">Finish Time</label>
                                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Days With Custom Schedules</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="mb-3 col-lg-12 px-3 first_section">
                        <div class="latepoint-message latepoint-message-subtle">
                            Agent shares custom daily schedules that you set in general settings for your company, however you can add additional days with custom hours which will be specific to this agent only.
                        </div>
                    </div>
                    <div class="custom-day-work-periods px-3">
                        <div class="custom-day-work-period">
                            <div class="custom-day-work-period-i">
                                <div class="custom-day-number">07</div>
                                <div class="custom-day-month">June</div>
                            </div><div class="custom-day-periods">
                                <div class="custom-day-period">08:00am - 06:00pm</div>
                            </div>
                        </div>
                        <a class="add-custom-day-w" data-os-after-call="latepoint_init_custom_day_schedule" data-os-lightbox-classes="width-700  hide-schedule" data-os-output-target="lightbox" data-os-action="settings__custom_day_schedule_form" data-os-params="agent_id=2&amp;service_id=0&amp;location_id=0">
                            <div class="add-custom-day-i">
                                <div class="add-day-graphic-w">
                                    <div class="add-day-plus">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <div class="add-day-label">Add Day</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Holidays & Days Off</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="mb-3 col-lg-12 px-3 first_section">
                        <div class="latepoint-message latepoint-message-subtle">
                            Agent uses the same holidays you set in general settings for your company, however you can add additional holidays for this agent here.
                        </div>
                    </div>
                    <div class="custom-day-work-periods px-3">
                        <div class="custom-day-work-period">
                            <div class="custom-day-work-period-i">
                                <div class="custom-day-number">07</div>
                                <div class="custom-day-month">June</div>
                            </div><div class="custom-day-periods">
                                <div class="custom-day-period">08:00am - 06:00pm</div>
                            </div>
                        </div>
                        <a class="add-custom-day-w" data-os-after-call="latepoint_init_custom_day_schedule" data-os-lightbox-classes="width-700  hide-schedule" data-os-output-target="lightbox" data-os-action="settings__custom_day_schedule_form" data-os-params="agent_id=2&amp;service_id=0&amp;location_id=0">
                            <div class="add-custom-day-i">
                                <div class="add-day-graphic-w">
                                    <div class="add-day-plus">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <div class="add-day-label">Add Day</div>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </div>

        <div>
            <button class="btn btn-primary add-agent" type="button">Update Agent</button>
            <button class="btn btn-danger delete-agent" type="button">Delete Agent</button>
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
    });
</script>

@endsection
