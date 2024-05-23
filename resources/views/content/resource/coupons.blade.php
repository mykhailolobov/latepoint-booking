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
            @foreach ($coupons as $coupon)
            <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                        {{$coupon->coupon_name}}
                    </button>
                </h2>
                <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                    <form action="{{route('resource-updatecoupons')}}" method="post" class="update-coupon">
                        @csrf
                        <div class="accordion-body">
                            <div class="card-body">
                                <div class="col-lg-12 d-flex mb-3">
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Coupon Code</label>
                                        <input type="text" name="coupon_code" value="{{$coupon->coupon_code}}" class="form-control" id="defaultFormControlInput" placeholder="Coupon Code" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Name (For Internal Use)</label>
                                        <input type="text" name="coupon_name" value="{{$coupon->coupon_name}}" class="form-control" id="defaultFormControlInput" placeholder="Name (For Internal Use)" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="defaultFormControlInput" class="form-label">Discount Value</label>
                                        <input type="text" name="discount_value" value="{{$coupon->discount_value}}" class="form-control" id="defaultFormControlInput" placeholder="Discount Value" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-lg-3 px-1">
                                        <label for="selectpickerBasic" class="form-label">Type</label>
                                        <select id="selectpickerBasic" name="discount_type" class="selectpicker w-100" data-style="btn-default">
                                            <option value="percent">Percent</option>
                                            <option value="fixed_value">Fixed Value</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="coupon-use-restrictions">
                                    <h3>Coupon Use Restrictions:</h3>
                                    <div class="row d-flex">
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Use Limit Per Customer</label>
                                            <input type="text" name="limit_per_customer" value="" class="form-control" id="defaultFormControlInput" placeholder="Use Limit Per Customer" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Total Use Limit</label>
                                            <input type="text" name="total_use_limit" value="" class="form-control" id="defaultFormControlInput" placeholder="Total Use Limit" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Min Number of Customer Orders</label>
                                            <input type="text" name="min_number" value="" class="form-control" id="defaultFormControlInput" placeholder="Min Number of Customer Orders" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Max Number of Customer Orders</label>
                                            <input type="text" name="max_number" value="" class="form-control" id="defaultFormControlInput" placeholder="Max Number of Customer Orders" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Agent IDs</label>
                                            <input type="text" name="agentID" value="" class="form-control" id="defaultFormControlInput" placeholder="Agent IDs" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Service IDs</label>
                                            <input type="text" name="serviceID" value="" class="form-control" id="defaultFormControlInput" placeholder="Service IDs" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="defaultFormControlInput" class="form-label">Customer IDs</label>
                                            <input type="text" name="customerID" value="" class="form-control" id="defaultFormControlInput" placeholder="Customer IDs" aria-describedby="defaultFormControlHelp" />
                                        </div>
                                        <div class="col-lg-3 px-1">
                                            <label for="selectpickerBasic" class="form-label">Status</label>
                                            <select id="selectpickerBasic" name="status" class="selectpicker w-100" data-style="btn-default">
                                                <option value="active">Coupon is Active</option>
                                                <option value="disabled">Coupon is Disabled</option>
                                            </select>
                                        </div>
                                        <input type="text" name="id" value="{{$coupon->id}}" hidden/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Coupon</button>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
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

    $('form.update-coupon').on('submit', function(e){
        e.preventDefault();
        const csrf_token = $('meta[name="csrf-token"]').attr('content');
        const id = $('input[name="id"]').val();
        const coupon_name = $('input[name="coupon_name"]').val();
        const coupon_code = $('input[name="coupon_code"]').val();
        const discount_value = $('input[name="discount_value"]').val();
        const discount_type = $('input[name="discount_type"]').val();
        const status = $('select[name="status"]').val();
       

        $.ajax({
            type: 'POST',
            url: "{{ route('resource-updatecoupons') }}",
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            data: {
                id: id,
                coupon_name: coupon_name ? coupon_name: null,
                coupon_code: coupon_code,
                discount_type: discount_type? discount_type: null,
                discount_value: discount_value? discount_value: null,
                status: status
            },
            success: function() {
                console.log('success');
                window.location.href = "{{ route('resource-categories') }}";
            },
            error: function(err) {
                console.log(err);
            }
        });
    })

    // $('form.add-coupon').on('submit', function(e){
    //     e.preventDefault();
    //     const csrf_token = $('meta[name="csrf-token"]').attr('content');
    //     const coupon_name = $('input[name="coupon_name"]').val();
    //     const coupon_code = $('input[name="coupon_code"]').val();
    //     const discount_value = $('input[name="discount_value"]').val();
    //     const discount_type = $('input[name="discount_type"]').val();
    //     const status = $('select[name="status"]').val();
       

    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ route('resource-storecoupons') }}",
    //         headers: {
    //             'X-CSRF-TOKEN': csrf_token
    //         },
    //         data: {
    //             coupon_name: coupon_name ? coupon_name: null,
    //             coupon_code: coupon_code,
    //             discount_type: discount_type? discount_type: null,
    //             discount_value: discount_value? discount_value: null,
    //             status: status
    //         },
    //         success: function() {
    //             console.log('success');
    //             window.location.href = "{{ route('resource-categories') }}";
    //         },
    //         error: function(err) {
    //             console.log(err);
    //         }
    //     });
    // })
</script>

@endsection
