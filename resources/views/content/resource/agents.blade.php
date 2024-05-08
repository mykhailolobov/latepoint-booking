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

<link href="{{asset('/assets/custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Agents</h4>
            <hr>
        </div>
        <div class="index-agent-boxes">
            <a href="#" class="agent-box-w agent-status-active">
                <div class="agent-edit-icon"><i class="latepoint-icon latepoint-icon-edit-3"></i></div>
                <div class="agent-info-w">
                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/9.png") ?>)"></div>
                    <div class="agent-info">
                        <div class="agent-name">John Mayers</div>
                        <div class="agent-phone">+18923749238</div>
                        <span class="agent-connection-icon">
                            <img title="Connected to WordPress User" src="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/plugins/latepoint/public/images/wordpress-logo.png">
                        </span>                                                   
                    </div>
                </div>
                <div class="agent-schedule">
                    <div class="schedule-day is-on">Mon</div>
                    <div class="schedule-day is-on">Tue</div>
                    <div class="schedule-day is-on">Wed</div>
                    <div class="schedule-day is-on">Thu</div>
                    <div class="schedule-day is-on">Fri</div>
                    <div class="schedule-day is-on">Sat</div>
                    <div class="schedule-day is-on">Sun</div>                 
                </div>
                <div class="agent-schedule-info">
                    <div class="agent-today-info">
                        Today <span class="today-status is-on-duty">On Duty</span>
                        <div class="today-schedule">
                            <span>08:00am - 05:00pm</span>                  
                        </div>
                    </div>
                    <div class="today-bookings">
                        Bookings<div class="today-bookings-count">0</div>
                    </div>
                </div>
            </a>

            <a href="#" class="agent-box-w agent-status-active">
                <div class="agent-edit-icon"><i class="latepoint-icon latepoint-icon-edit-3"></i></div>
                <div class="agent-info-w">
                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/7.png") ?>)"></div>
                    <div class="agent-info">
                        <div class="agent-name">Kim Collins</div>
                        <div class="agent-phone">+18972348393</div>
                    </div>
                </div>
                <div class="agent-schedule">
                    <div class="schedule-day is-on">Mon</div>
                    <div class="schedule-day is-on">Tue</div>
                    <div class="schedule-day is-on">Wed</div>
                    <div class="schedule-day is-on">Thu</div>
                    <div class="schedule-day is-on">Fri</div>
                    <div class="schedule-day is-on">Sat</div>
                    <div class="schedule-day is-on">Sun</div>                 
                </div>
                <div class="agent-schedule-info">
                    <div class="agent-today-info">
                        Today                
                        <span class="today-status is-on-duty">On Duty</span>
                        
                        <div class="today-schedule">
                            <span>08:00am - 05:00pm</span>                  
                        </div>
                    </div>
                    <div class="today-bookings">
                        Bookings <div class="today-bookings-count">0</div>
                    </div>
                </div>
            </a>

            <a href="#" class="agent-box-w agent-status-active">
                <div class="agent-edit-icon"><i class="latepoint-icon latepoint-icon-edit-3"></i></div>
                <div class="agent-info-w">
                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/11.png") ?>)"></div>
                    <div class="agent-info">
                        <div class="agent-name">Ben Stones</div>
                        <div class="agent-phone">+1826348272</div>
                    </div>
                </div>
                <div class="agent-schedule">
                    <div class="schedule-day is-on">Mon</div>
                    <div class="schedule-day is-on">Tue</div>
                    <div class="schedule-day is-on">Wed</div>
                    <div class="schedule-day is-on">Thu</div>
                    <div class="schedule-day is-on">Fri</div>
                    <div class="schedule-day is-on">Sat</div>
                    <div class="schedule-day is-on">Sun</div>                 
                </div>
                <div class="agent-schedule-info">
                    <div class="agent-today-info">
                        Today                
                        <span class="today-status is-on-duty">On Duty</span>
                        
                        <div class="today-schedule">
                            <span>08:00am - 05:00pm</span>                  
                        </div>
                    </div>
                    <div class="today-bookings">
                        Bookings <div class="today-bookings-count">0</div>
                    </div>
                </div>
            </a>

            <a href="#" class="agent-box-w agent-status-active">
                <div class="agent-edit-icon"><i class="latepoint-icon latepoint-icon-edit-3"></i></div>
                <div class="agent-info-w">
                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/15.png") ?>)"></div>
                    <div class="agent-info">
                        <div class="agent-name">Clark Simeon</div>
                        <div class="agent-phone">+18457263473</div>
                    </div>
                </div>
                <div class="agent-schedule">
                    <div class="schedule-day is-on">Mon</div>
                    <div class="schedule-day is-on">Tue</div>
                    <div class="schedule-day is-on">Wed</div>
                    <div class="schedule-day is-on">Thu</div>
                    <div class="schedule-day is-on">Fri</div>
                    <div class="schedule-day is-on">Sat</div>
                    <div class="schedule-day is-on">Sun</div>                 
                </div>
                <div class="agent-schedule-info">
                    <div class="agent-today-info">
                        Today                
                        <span class="today-status is-on-duty">On Duty</span>
                        
                        <div class="today-schedule">
                            <span>08:00am - 05:00pm</span>                  
                        </div>
                    </div>
                    <div class="today-bookings">
                        Bookings <div class="today-bookings-count">0</div>
                    </div>
                </div>
            </a>
            <a href="{{url('/resource/createagents')}}" class="create-agent-link-w">
                <div class="create-agent-link-i">
                  <div class="add-agent-graphic-w">
                    <div class="add-agent-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                  </div>
                  <div class="add-agent-label">Add Agent</div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
