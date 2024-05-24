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
            <a href="{{ url('/resource/services') }}" class="agent-status-active text-center service_title mx-2">
                <h4 class="m-0 me-2">Services</h4>
            </a>
            <a href="{{ url('/resource/categories') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Categories</h4>
            </a>
            <a href="{{ url('/resource/serviceextras') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Service Extras</h4>
            </a>
            <hr>
        </div>
        <div class="">
            <div class="os-form-sub-header sub-level">
                <h3>General Dentistry</h3>
            </div>

            <div class="index-agent-boxes">
                @foreach ($generalServices as $general)               
                <a href="{{route('resource-editservices', $general->id) }}" class="agent-box-w agent-status-active text-center os-service">
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
                                    <strong>{{$general->duration}}</strong> min
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
                                    <strong>{{$general->buffer_before}}/{{$general->buffer_after}}</strong> min
                                </div>
                            </div>
                            <div class="service-info-row">
                                <div class="label">Capacity:</div>
                                <div class="value">
                                    <strong>{{$general->capacity_min}} - {{$general->capacity_max}}</strong> person
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Service</button>
                </a>
                @endforeach
                <a class="create-service-link-w" href="{{url('/resource/createservices')}}">
                    <div class="create-service-link-i">
                        <div class="add-service-graphic-w">
                            <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                        </div>
                        <div class="add-service-label">Add Service</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="">
            <div class="os-form-sub-header sub-level">
                <h3>Cosmetic Dentistry</h3>
            </div>

            <div class="index-agent-boxes">
                @foreach ($cosmeticServices as $cosmetic)
                <a href="{{ route('resource-editservices', $cosmetic->id) }}" class="agent-box-w agent-status-active text-center os-service">
                    <div class="agent-info-w">
                        <div class="agent-info">
                            <div class="agent-name">Tooth Whitening</div>
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
                                <div class="agents-more">+4 more</div>      
                            </div>
                        </div>
                        <div class="os-service-info">
                            <div class="service-info-row">
                                <div class="label">Duration:</div>
                                <div class="value">
                                    <strong>30</strong> min
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
                                    <strong>{{$cosmetic->buffer_before}}/{{$cosmetic->buffer_after}}</strong> min
                                </div>
                            </div>
                            <div class="service-info-row">
                                <div class="label">Capacity:</div>
                                <div class="value">
                                    <strong>{{$cosmetic->capacity_min}} - {{$cosmetic->capacity_max}}</strong> person
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Service</button>
                </a>
                @endforeach

                <a class="create-service-link-w" href="{{url('/resource/createservices')}}">
                    <div class="create-service-link-i">
                        <div class="add-service-graphic-w">
                            <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                        </div>
                        <div class="add-service-label">Add Service</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="">
            <div class="os-form-sub-header sub-level">
                <h3>Implants Dentistry</h3>
            </div>

            <div class="index-agent-boxes">
                @foreach ($implantsServices as $implants)
                <a href="{{ route('resource-editservices', $implants->id) }}" class="agent-box-w agent-status-active text-center os-service">
                    <div class="agent-info-w">
                        <div class="agent-info">
                            <div class="agent-name">Porcelain Crown</div>
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
                                <div class="agents-more">+4 more</div>      
                            </div>
                        </div>
                        <div class="os-service-info">
                            <div class="service-info-row">
                                <div class="label">Duration:</div>
                                <div class="value">
                                    <strong>30</strong> min
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
                                    <strong>{{$implants->buffer_before}}/{{$implants->buffer_after}}</strong> min
                                </div>
                            </div>
                            <div class="service-info-row">
                                <div class="label">Capacity:</div>
                                <div class="value">
                                    <strong>{{$implants->capacity_min}} - {{$implants->capacity_max}}</strong> person
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Service</button>
                </a>
                @endforeach
                

                <a class="create-service-link-w" href="{{url('/resource/createservices')}}">
                    <div class="create-service-link-i">
                        <div class="add-service-graphic-w">
                            <div class="add-service-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
                        </div>
                        <div class="add-service-label">Add Service</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
