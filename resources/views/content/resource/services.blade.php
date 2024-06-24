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

<link href="{{asset('/assets/css/services_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-4 d-flex">
            <a href="{{ url('/admin/resource/services') }}" class="agent-status-active text-center service_title mx-2">
                <h4 class="m-0 me-2">Services</h4>
            </a>
            <a href="{{ url('/admin/resource/categories') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Categories</h4>
            </a>
            <a href="{{ url('/admin/resource/serviceextras') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Service Extras</h4>
            </a>
            <hr>
        </div>
        <div class="">
            <div class="os-form-sub-header sub-level">
                <h3>Uncategorized</h3>
            </div>
            <div class="index-agent-boxes">
                @foreach ($services as $serv)
                @if($serv->category_id == '0')               
                    <a href="{{route('admin.resource-editservices', $serv->id) }}" class="agent-box-w agent-status-active text-center os-service">
                        <div class="agent-info-w">
                            <div class="agent-info">
                                <div class="agent-name">Group Booking</div>
                            </div>
                        </div>
                        <div class="os-service-body">
                            <div class="os-service-agents">
                                <div class="label">Agents:</div>
                                <div class="agents-avatars">
                                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/7.png") ?>)">

                                    </div>
                                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/8.png") ?>)">

                                    </div>
                                    <div class="agents-more">+2 more</div>      
                                </div>
                            </div>
                            <div class="os-service-info">
                                <div class="service-info-row">
                                    <div class="label">Duration:</div>
                                    <div class="value">
                                        <strong>{{$serv->duration}}</strong> min
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Price:</div>
                                    <div class="value">
                                        <strong>$20</strong>
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Buffer:</div>
                                    <div class="value">
                                        <strong>{{$serv->buffer_before}}/{{$serv->buffer_after}}</strong> min
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Capacity:</div>
                                    <div class="value">
                                        <strong>{{$serv->capacity_min}} - {{$serv->capacity_max}}</strong> person
                                    </div>
                                </div>
                           </div>
                        </div>

                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Service</button>
                    </a>
                    @endif
                    @endforeach
                    <a class="create-service-link-w" href="{{url('/admin/resource/createservices')}}">
                        <div class="create-service-link-i">
                            <div class="add-service-graphic-w">
                                <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                            </div>
                            <div class="add-service-label">Add Service</div>
                        </div>
                    </a>
                </div>

        </div>

        @foreach ($categories as $cat)  
        <div class="">
            <div class="os-form-sub-header sub-level">
                <h3>{{ $cat->name }}</h3>
            </div>
            <div class="index-agent-boxes">
                @foreach ($services as $serv)     
                 @if($serv->category_id == $cat->id)          
                    <a href="{{route('admin.resource-editservices', $serv->id) }}" class="agent-box-w agent-status-active text-center os-service">
                        <div class="agent-info-w">
                            <div class="agent-info">
                                <div class="agent-name">Group Booking</div>
                            </div>
                        </div>
                        <div class="os-service-body">
                            <div class="os-service-agents">
                                <div class="label">Agents:</div>
                                <div class="agents-avatars">
                                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/7.png") ?>)">

                                    </div>
                                    <div class="agent-avatar" style="background-image: url(<?= asset("assets/img/avatars/8.png") ?>)">

                                    </div>
                                    <div class="agents-more">+2 more</div>      
                                </div>
                            </div>
                            <div class="os-service-info">
                                <div class="service-info-row">
                                    <div class="label">Duration:</div>
                                    <div class="value">
                                        <strong>{{$serv->duration}}</strong> min
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Price:</div>
                                    <div class="value">
                                        <strong>$20</strong>
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Buffer:</div>
                                    <div class="value">
                                        <strong>{{$serv->buffer_before}}/{{$serv->buffer_after}}</strong> min
                                    </div>
                                </div>
                                <div class="service-info-row">
                                    <div class="label">Capacity:</div>
                                    <div class="value">
                                        <strong>{{$serv->capacity_min}} - {{$serv->capacity_max}}</strong> person
                                    </div>
                                </div>
                           </div>
                        </div>

                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Service</button>
                    </a>
                    @endif
                @endforeach
                <a class="create-service-link-w" href="{{ url('/admin/resource/createservices?category_id=' . $cat->id) }}">
                    <div class="create-service-link-i">
                        <div class="add-service-graphic-w">
                            <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                        </div>
                        <div class="add-service-label">Add Service</div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
