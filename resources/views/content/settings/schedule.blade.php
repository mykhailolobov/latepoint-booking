@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/card-analytics.scss'])
@endsection

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/flatpickr/flatpickr.scss', 'resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/dropzone/dropzone.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/dropzone/dropzone.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/ui-cards-analytics.js', 'resources/assets/js/forms-selects.js', 'resources/assets/js/forms-file-upload.js'])
@endsection

@section('content')
    <link href="{{ asset('/assets/css/settings.css') }}" rel="stylesheet">
    @php
        $week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    @endphp
    <div class="row">
        <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
            <div class="card-header mb-4 d-flex">
                <a href="{{ url('/settings/general') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">General</h4>
                </a>
                <a href="{{ url('/settings/schedule') }}" class="agent-status-active text-center mx-2 acitive-tab">
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
                    <h5 class="card-header">General Weekly Schedule</h5>
                    <div class="card-body demo-only-element p-0">
                        <div class="white-box-content">
                            <div class="weekday-schedules-w">
                                @foreach ($week as $day)
                                    <div class="weekday-schedule-w">
                                        <div class="ws-head-w">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" onchange="changeCheck(this)" checked />
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                            </label>
                                            <div class="ws-head">
                                                <div class="ws-day-name">
                                                    {{ $day }}
                                                </div>
                                                <div class="ws-day-hours">
                                                    <span>01:05am-05:00pm</span>
                                                </div>
                                                <div class="wp-edit-icon">
                                                    <i class="bx bx-edit-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="weekday-schedule-form">
                                            <div class="ws-period">
                                                <div class="os-time-group os-time-input-w as-period">
                                                    <label for="work_periods[1][start_time][formatted_value]">Start</label>
                                                    <div class="os-time-input-fields">
                                                        <input type="text" placeholder="HH:MM"
                                                            name="work_periods[1][start_time][formatted_value]"
                                                            value="01:05" class="os-form-control os-mask-time"
                                                            inputmode="text">
                                                        <input type="hidden" name="work_periods[1][start_time][ampm]"
                                                            value="am" class="ampm-value-hidden-holder">
                                                        <div class="time-ampm-w">
                                                            <div class="time-ampm-select time-am active"
                                                                data-ampm-value="am">
                                                                am
                                                            </div>
                                                            <div class="time-ampm-select time-pm " data-ampm-value="pm">
                                                                pm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="os-time-group os-time-input-w as-period">
                                                    <label for="work_periods[1][end_time][formatted_value]">Finish</label>
                                                    <div class="os-time-input-fields">
                                                        <input type="text" placeholder="HH:MM"
                                                            name="work_periods[1][end_time][formatted_value]" value="05:00"
                                                            class="os-form-control os-mask-time" inputmode="text">
                                                        <input type="hidden" name="work_periods[1][end_time][ampm]"
                                                            value="pm" class="ampm-value-hidden-holder">
                                                        <div class="time-ampm-w">
                                                            <div class="time-ampm-select time-am " data-ampm-value="am">
                                                                am
                                                            </div>
                                                            <div class="time-ampm-select time-pm active"
                                                                data-ampm-value="pm">
                                                                pm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><input type="hidden" name="work_periods[1][week_day]" value="1"
                                                    id="work_periods_1_week_day">
                                                <input type="hidden" name="work_periods[1][is_active]" value="1"
                                                    class="is-active" id="work_periods_1_is_active">
                                                <input type="hidden" name="work_periods[1][agent_id]" value="0"
                                                    id="work_periods_1_agent_id">
                                                <input type="hidden" name="work_periods[1][location_id]" value="0"
                                                    id="work_periods_1_location_id">
                                                <input type="hidden" name="work_periods[1][service_id]" value="0"
                                                    id="work_periods_1_service_id">
                                            </div>
                                            <div class="ws-period-add" data-="" data-os-params="week_day=1"
                                                data-os-before-after="before"
                                                data-os-after-call="latepoint_init_work_period_form"
                                                data-os-action="settings__load_work_period_form">
                                                <div class="add-period-graphic-w">
                                                    <div class="add-period-plus">
                                                        <i class="bx bxs-plus-square"></i></div>
                                                </div>
                                                <div class="add-period-label">Add another work period for Monday</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="os-form-buttons">
                                <div class="os-form-group">
                                    <button class="btn btn-primary add-agent" type="button">
                                        Save Weekly Schedule
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Days With Custom Schedules</h5>
                    <div class="card-body demo-only-element p-0">
                        <div class="white-box-content">
                            <div class="custom-day-work-periods">
                                <div class="custom-day-work-period">
                                    <a href="#" title="Edit Day Schedule" class="edit-custom-day"
                                        data-os-after-call="latepoint_init_custom_day_schedule"
                                        data-os-lightbox-classes="width-700 " data-os-output-target="lightbox"
                                        data-os-action="settings__custom_day_schedule_form"
                                        data-os-params="target_date=2024-06-06&amp;agent_id=0&amp;service_id=0&amp;location_id=0">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                    <a href="#" data-os-pass-this="yes"
                                        data-os-after-call="latepoint_custom_day_removed"
                                        data-os-action="settings__remove_custom_day_schedule"
                                        data-os-params="agent_id=0&amp;service_id=0&amp;location_id=0&amp;date=2024-06-06"
                                        data-os-prompt="Are you sure you want to remove custom schedule for this day?"
                                        title="Remove Day Schedule" class="remove-custom-day">
                                        <i class="bx bx-trash"></i>
                                    </a>
                                    <div class="custom-day-work-period-i">
                                        <div class="custom-day-number">06</div>
                                        <div class="custom-day-month">June</div>
                                    </div>
                                    <div class="custom-day-periods">
                                        <div class="custom-day-period">08:00am - 06:00pm</div>
                                    </div>
                                </div>

                                <a class="add-custom-day-w" data-os-after-call="latepoint_init_custom_day_schedule"
                                    data-os-lightbox-classes="width-700  hide-schedule" data-os-output-target="lightbox"
                                    data-os-action="settings__custom_day_schedule_form"
                                    data-os-params="agent_id=0&amp;service_id=0&amp;location_id=0">
                                    <div class="add-custom-day-i">
                                        <div class="add-day-graphic-w">
                                            <div class="add-day-plus">
                                                <i class="bx bx-plus bx-xs"></i>
                                            </div>
                                        </div>
                                        <div class="add-day-label">Add Day</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Days With Custom Schedules</h5>
                    <div class="card-body demo-only-element p-0">
                        <div class="white-box-content">
                            <div class="custom-day-work-periods">
                                <div class="custom-day-work-period custom-day-off">
                                    <a href="#" title="Edit Day Schedule" class="edit-custom-day"
                                        data-os-after-call="latepoint_init_custom_day_schedule"
                                        data-os-lightbox-classes="width-700 " data-os-output-target="lightbox"
                                        data-os-action="settings__custom_day_schedule_form"
                                        data-os-params="target_date=2024-06-05&amp;agent_id=0&amp;service_id=0&amp;location_id=0"><i
                                            class="bx bx-edit-alt"></i></a><a href="#" data-os-pass-this="yes"
                                        data-os-after-call="latepoint_custom_day_removed"
                                        data-os-action="settings__remove_custom_day_schedule"
                                        data-os-params="agent_id=0&amp;service_id=0&amp;location_id=0&amp;date=2024-06-05"
                                        data-os-prompt="Are you sure you want to remove this day off?"
                                        title="Remove Day Off" class="remove-custom-day"><i class="bx bx-trash"></i></a>
                                    <div class="custom-day-work-period-i">
                                        <div class="custom-day-number">05</div>
                                        <div class="custom-day-month">June</div>
                                    </div>
                                </div>
                                <a class="add-custom-day-w" data-os-after-call="latepoint_init_custom_day_schedule"
                                    data-os-lightbox-classes="width-700  hide-schedule" data-os-output-target="lightbox"
                                    data-os-action="settings__custom_day_schedule_form"
                                    data-os-params="agent_id=0&amp;service_id=0&amp;location_id=0">
                                    <div class="add-custom-day-i">
                                        <div class="add-day-graphic-w">
                                            <div class="add-day-plus">
                                                <i class="bx bx-plus bx-xs"></i>
                                            </div>
                                        </div>
                                        <div class="add-day-label">Add Day</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
    <script>
        $('.ws-head').click(function() {
            $(this).parents('.weekday-schedule-w').toggleClass('is-editing');
        });

        function changeCheck(obj) {
            $(obj).parents('.weekday-schedule-w').toggleClass('day-off');
        }
    </script>
@endsection
