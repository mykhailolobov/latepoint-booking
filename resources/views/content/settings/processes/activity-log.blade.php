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
            <a href="{{ url('/settings/processes') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Processes</h4>
            </a>
            <a href="{{ url('/settings/process_jobs') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Scheduled Jobs</h4>
            </a>
            <a href="{{ url('/settings/activities') }}" class="agent-status-active text-center mx-2 acitive-tab">
                <h4 class="m-0 me-2">Activity Log</h4>
            </a>
            <hr>
        </div>
        <div class="col-md-12">
        </div>
    </div>
</div>

@endsection
