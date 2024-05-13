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

])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/flatpickr/flatpickr.js',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js'

])
@endsection

@section('page-script')
@vite([
'resources/assets/js/ui-cards-analytics.js',
'resources/assets/js/forms-selects.js'
])
@endsection
@section('content')

<link href="{{asset('/assets/css/coupon_custom.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-0">
            <h4 class="m-0 me-2">Coupons</h4>
            <hr>
        </div>
        <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
            <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                        dsf
                    </button>
                </h2>

                <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                    <div class="accordion-body">
                        <div class="card-body">
                            <div class="col-lg-12 d-flex mb-3">
                                <div class="col-lg-3 px-1">
                                    <label for="defaultFormControlInput" class="form-label">Coupon Code</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Coupon Code" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-lg-3 px-1">
                                    <label for="defaultFormControlInput" class="form-label">Name (For Internal Use)</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Name (For Internal Use)" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-lg-3 px-1">
                                    <label for="defaultFormControlInput" class="form-label">Discount Value</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Discount Value" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-lg-3 px-1">
                                    <label for="selectpickerBasic" class="form-label">Type</label>
                                    <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                        <option>Percent</option>
                                        <option>Fixed Value</option>
                                    </select>
                                </div>
                            </div>

                            <div class="coupon-use-restrictions">
                                <h3>Coupon Use Restrictions:</h3>
                                <div class="row d-flex">
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Use Limit Per Customer</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Use Limit Per Customer" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Total Use Limit</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Total Use Limit" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Min Number of Customer Orders</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Min Number of Customer Orders" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Max Number of Customer Orders</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Max Number of Customer Orders" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Agent IDs</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Agent IDs" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Service IDs</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Service IDs" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Customer IDs</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Customer IDs" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="selectpickerBasic" class="form-label">Status</label>
                                        <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                                            <option>Coupon is Active</option>
                                            <option>Coupon is Disabled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Save Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="add-coupon-box" class="add-coupon-box" data-os-action="coupons__new_form" data-os-output-target-do="append" data-os-output-target=".os-coupons-w">
            <div class="add-coupon-graphic-w">
                <div class="add-coupon-plus"><i class="latepoint-icon latepoint-icon-plus4 fa fa-plus"></i></div>
            </div>
            <div class="add-coupon-label">Add Coupon</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add-coupon-box').click(function() {
            var element = '<div id="accordionIcon" class="accordion mt-3 accordion-without-arrow"><div class="accordion-item card"><h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">New Coupon</button></h2><div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon"><div class="accordion-body"><div class="card-body"><div class="col-lg-12 d-flex mb-3"><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Coupon Code</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Coupon Code" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Name (For Internal Use)</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Name (For Internal Use)" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Discount Value</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Discount Value" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="selectpickerBasic" class="form-label">Type</label><select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default"><option>Percent</option><option>Fixed Value</option></select></div></div><div class="coupon-use-restrictions"><h3>Coupon Use Restrictions:</h3><div class="row d-flex"><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Use Limit Per Customer</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Use Limit Per Customer" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Total Use Limit</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Total Use Limit" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Min Number of Customer Orders</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Min Number of Customer Orders" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Max Number of Customer Orders</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Max Number of Customer Orders" aria-describedby="defaultFormControlHelp" /></div></div><div class="row d-flex"><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Agent IDs</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Agent IDs" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Service IDs</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Service IDs" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="defaultFormControlInput" class="form-label">Customer IDs</label><input type="text" class="form-control" id="defaultFormControlInput" placeholder="Customer IDs" aria-describedby="defaultFormControlHelp" /></div><div class="col-lg-3 px-1"><label for="selectpickerBasic" class="form-label">Status</label><select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default"><option>Coupon is Active</option><option>Coupon is Disabled</option></select></div></div></div><button type="button" class="btn btn-primary">Save Coupon</button></div></div></div>';
            $("#add-coupon-box").before(element);
        });
    });
</script>

@endsection
