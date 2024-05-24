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

<link href="{{asset('/assets/css/serviceextra_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header d-flex mb-4">
            <a href="{{ url('/resource/services') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Services</h4>
            </a>
            <a href="{{ url('/resource/categories') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Categories</h4>
            </a>
            <a href="{{ url('/resource/serviceextras') }}" class="agent-status-active text-center service_title mx-2">
                <h4 class="m-0 me-2">Service Extras</h4>
            </a>
            <hr>
        </div>
        <div class="index-agent-boxes">
            @foreach ($extras as $serviceExtra)
            <a href="{{ route('resource-editserviceextras', $serviceExtra->id) }}" class="agent-box-w agent-status-active text-center os-service">
                <div class="agent-info-w">
                    <div class="agent-info">
                        <div class="agent-name">{{$serviceExtra->name}}</div>
                    </div>
                </div>
                <div class="os-service-body">
                    <div class="os-service-agents">
                        <div class="label">Services:</div>
                        <div class="selected-count selected-count-all">
                            All Selected
                        </div>
                    </div>
                    <div class="os-service-info">
                        <div class="service-info-row">
                            <div class="label">Duration:</div>
                            <div class="value">
                                <strong>{{$serviceExtra->duration}}</strong> min
                            </div>
                        </div>
                        <div class="service-info-row">
                            <div class="label">Price:</div>
                            <div class="value">
                                <strong>$20</strong>
                            </div>
                        </div>
                        <div class="service-info-row">
                            <div class="label">Max Qty:</div>
                            <div class="value">
                                <strong>{{$serviceExtra->maximum_quantity}}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Extra</button>
            </a>
            @endforeach
            

            <a class="create-service-link-w" href="{{url('/resource/createserviceextras')}}">
                <div class="create-service-link-i">
                    <div class="add-service-graphic-w">
                        <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                    </div>
                    <div class="add-service-label">Add Extra</div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
