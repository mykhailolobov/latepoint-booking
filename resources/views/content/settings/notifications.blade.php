@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

@section('content')
<link href="{{asset('/assets/css/settings.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-4 d-flex">
            <a href="{{ url('/settings/general') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">General</h4>
            </a>
            <a href="{{ url('/settings/schedule') }}" class="agent-status-active text-center mx-2 ">
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
            <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2 acitive-tab">
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
        </div>
    </div>
</div>

@endsection
