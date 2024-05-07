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

<style type="text/css">
    .percent_val {
        padding-left: 0 !important;
    }
    .agent-schedule {
        display: flex;
        padding: 15px 0;
    }

    .agent-schedule .schedule-day {
        position: relative;
        flex: 1;
        text-align: center;
        padding-top: 15px;
        font-size: 11px;
        color: #d4d5e1;
    }
    .agent-schedule .schedule-day.is-on:before {
        background-color: #59d193;
    }
    .agent-schedule .schedule-day:before {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 10px;
        background-color: #d4d5e1;
        transform-origin: center center;
        transition: transform .2s ease;
    }
</style>
<div class="row">
    <div class="col-lg-12 col-xxl-4 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Agents</h4>
        </div>
        <hr>
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="d-flex">
                    <img class="img-fluid rounded-circle my-4 px-3" src="http://localhost:8000/assets/img/avatars/1.png" height="110" width="110" alt="User avatar">
                    <div class="user-info text-center my-4 px-3">
                        <h4 class="mb-2">John Mayers</h4>
                        <span class="badge bg-label-secondary">+18923749238</span>
                    </div>
                </div>

                <div class="row mx-1">
                    <hr>
                    <div class="week_card">
                        <div class="agent-schedule">
                            <div class="schedule-day is-on">Mon</div>
                            <div class="schedule-day is-on">Tue</div>
                            <div class="schedule-day is-on">Wed</div>
                            <div class="schedule-day is-on">Thu</div>
                            <div class="schedule-day is-on">Fri</div>
                            <div class="schedule-day is-on">Sat</div>
                            <div class="schedule-day is-on">Sun</div>                 
                        </div>
                    </div>
                    <hr>
                </div>
                <a href=""><i class="fa fa-pencil"></i></a>
            </div>
            
        </div>
    </div>
</div>

@endsection
