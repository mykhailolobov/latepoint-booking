@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Latepoint')

@section('content')
    <link href="{{ asset('/assets/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet">

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
                <a href="{{ url('/settings/steps') }}" class="agent-status-active text-center mx-2 acitive-tab">
                    <h4 class="m-0 me-2">Steps</h4>
                </a>
                <a href="{{ url('/settings/payments') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Payments</h4>
                </a>
                <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Notifications</h4>
                </a>
                <a href="{{ url('/settings/roles') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Roles</h4>
                </a>
                <a href="{{ url('/settings/system') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">System</h4>
                </a>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="os-section-header">
                    <h3>Step Editing</h3>
                </div>
                <div class="steps-ordering-w" data-step-order-update-route="settings__update_order_of_steps">
                    <div class="step-w editing" data-step-name="locations" data-step-order-number="1">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Select Location</div>
                            <div class="step-type">locations</div>
                            <a href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=locations__index"
                                class="step-message">Since you only have one location, this step will be skipped</a>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Location" theme="bordered" id="step_titlelocations"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Select Location" theme="bordered" id="step_sub_titlelocations"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionlocations"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-locations"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-locations" class="custom-step-image-w-locations"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2019/02/step-locations.png"
                                                                data-xblocker="passed" style="visibility: visible;"></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="26"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="locations" id="step_namelocations">
                                    <input type="hidden" name="step[order_number]" value="1"
                                        id="step_order_numberlocations">
                                    <div class="os-step-form-buttons">
                                        <a href="#" class="btn btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="btn btn-primary" id="submitlocations">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="services" data-step-order-number="2">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Select Service</div>
                            <div class="step-type">services</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Service" theme="bordered" id="step_titleservices"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Select Service" theme="bordered" id="step_sub_titleservices"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionservices"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-services"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-services" class="custom-step-image-w-services"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/step-services.png"
                                                                data-xblocker="passed" style="visibility: visible;"></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="22"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="services" id="step_nameservices">
                                    <input type="hidden" name="step[order_number]" value="2"
                                        id="step_order_numberservices">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitservices">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="service_extras" data-step-order-number="3">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Select Service Extras</div>
                            <div class="step-type">service extras</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Service Extras" theme="bordered"
                                                    id="step_titleservice_extras" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Select Service Extras" theme="bordered"
                                                    id="step_sub_titleservice_extras" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered"
                                                        id="step_descriptionservice_extras" class="os-form-control">Select service extras you want to add to your booking.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-service_extras"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-service_extras"
                                                class="custom-step-image-w-service_extras" style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container "></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Step Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value=""
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="service_extras"
                                        id="step_nameservice_extras"> <input type="hidden" name="step[order_number]"
                                        value="3" id="step_order_numberservice_extras">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitservice_extras">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="custom_fields_for_booking" data-step-order-number="3">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Custom Fields</div>
                            <div class="step-type">custom fields for booking</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Custom Fields" theme="bordered"
                                                    id="step_titlecustom_fields_for_booking" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Custom Fields" theme="bordered"
                                                    id="step_sub_titlecustom_fields_for_booking" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered"
                                                        id="step_descriptioncustom_fields_for_booking" class="os-form-control">Please answer this set of questions to proceed.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-custom_fields_for_booking"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-custom_fields_for_booking"
                                                class="custom-step-image-w-custom_fields_for_booking"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container "></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Step Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value=""
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="custom_fields_for_booking"
                                        id="step_namecustom_fields_for_booking"> <input type="hidden"
                                        name="step[order_number]" value="3"
                                        id="step_order_numbercustom_fields_for_booking">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitcustom_fields_for_booking">Save
                                                Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="agents" data-step-order-number="3">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Select Agent</div>
                            <div class="step-type">agents</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Agent" theme="bordered" id="step_titleagents"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Select Agent" theme="bordered" id="step_sub_titleagents"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionagents"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-agents"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-agents" class="custom-step-image-w-agents"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/step-agents.png"
                                                                data-xblocker="passed" style="visibility: visible;"></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="18"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="agents" id="step_nameagents"> <input
                                        type="hidden" name="step[order_number]" value="3"
                                        id="step_order_numberagents">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitagents">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="datepicker" data-step-order-number="4">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Select Date &amp; Time</div>
                            <div class="step-type">datepicker</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Date &amp; Time" theme="bordered"
                                                    id="step_titledatepicker" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Select Date &amp; Time" theme="bordered"
                                                    id="step_sub_titledatepicker" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptiondatepicker"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-datepicker"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-datepicker"
                                                class="custom-step-image-w-datepicker" style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/step-datepicker.png">
                                                        </div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="21"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="datepicker" id="step_namedatepicker">
                                    <input type="hidden" name="step[order_number]" value="4"
                                        id="step_order_numberdatepicker">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitdatepicker">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="contact" data-step-order-number="5">
                        <div class="step-head">
                            <div class="step-drag "></div>
                            <div class="step-name">Enter Information</div>
                            <div class="step-type">contact</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Enter Information" theme="bordered" id="step_titlecontact"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Enter Information" theme="bordered" id="step_sub_titlecontact"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptioncontact"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-contact"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-contact" class="custom-step-image-w-contact"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/step-contact.png"
                                                                data-xblocker="passed" style="visibility: visible;"></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="19"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="contact" id="step_namecontact">
                                    <input type="hidden" name="step[order_number]" value="5"
                                        id="step_order_numbercontact">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitcontact">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="payment" data-step-order-number="6">
                        <div class="step-head">
                            <div class="step-drag disabled"><span>Order of this step can not be changed.</span></div>
                            <div class="step-name">Select Payment Method</div>
                            <div class="step-type">payment</div>
                            <a href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=settings__payments"
                                class="step-message">Payment processing is disabled. Click to setup.</a>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Select Payment Method" theme="bordered" id="step_titlepayment"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Enter Payment Information" theme="bordered"
                                                    id="step_sub_titlepayment" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionpayment"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-payment"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-payment" class="custom-step-image-w-payment"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container "></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Step Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value=""
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="payment" id="step_namepayment">
                                    <input type="hidden" name="step[order_number]" value="6"
                                        id="step_order_numberpayment">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitpayment">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="verify" data-step-order-number="7">
                        <div class="step-head">
                            <div class="step-drag disabled"><span>Order of this step can not be changed.</span></div>
                            <div class="step-name">Verify Order Details</div>
                            <div class="step-type">verify</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Verify Order Details" theme="bordered" id="step_titleverify"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Verify Booking Details" theme="bordered"
                                                    id="step_sub_titleverify" class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionverify"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-verify"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-verify" class="custom-step-image-w-verify"
                                                style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container "></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Step Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value=""
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="verify" id="step_nameverify"> <input
                                        type="hidden" name="step[order_number]" value="7"
                                        id="step_order_numberverify">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitverify">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="step-w" data-step-name="confirmation" data-step-order-number="8">
                        <div class="step-head">
                            <div class="step-drag disabled"><span>Order of this step can not be changed.</span></div>
                            <div class="step-name">Confirmation</div>
                            <div class="step-type">confirmation</div>
                            <button class="step-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></button>
                        </div>
                        <div class="step-body">
                            <div class="os-form-w">
                                <form data-os-action="settings__update_step" action="">

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[title]"
                                                    value="Confirmation" theme="bordered" id="step_titleconfirmation"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Sub Title</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="step[sub_title]"
                                                    value="Confirmation" theme="bordered" id="step_sub_titleconfirmation"
                                                    class="os-form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Short Description</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div>
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered has-value no-label">
                                                    <textarea type="text" placeholder="" name="step[description]" theme="bordered" id="step_descriptionconfirmation"
                                                        class="os-form-control">Handles different career a accordingly, after a of the for found customary feedback by happiness</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Step Image</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                    type="hidden" name="step[use_custom_image]" value="off"
                                                    id="step_use_custom_image">
                                                <div data-controlled-toggle-id="custom-step-image-w-confirmation"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="step_use_custom_image">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Use Custom Step Image</label></div>
                                            </div>
                                            <div id="custom-step-image-w-confirmation"
                                                class="custom-step-image-w-confirmation" style="display: none;">
                                                <div class="os-image-selector-w "><a
                                                        href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=1"
                                                        data-label-remove-str="Remove Image"
                                                        data-label-set-str="Step Image" class="os-image-selector-trigger">
                                                        <div class="os-image-container has-image"><img
                                                                src="http://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/uploads/sites/25848/2018/11/step-confirmation.png"
                                                                data-xblocker="passed" style="visibility: visible;"></div>
                                                        <div class="os-image-selector-text"><span
                                                                class="os-text-holder">Remove Image</span></div>
                                                    </a><input type="hidden" name="step[icon_image_id]" value="20"
                                                        class="os-image-id-holder"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="step[name]" value="confirmation"
                                        id="step_nameconfirmation"> <input type="hidden" name="step[order_number]"
                                        value="8" id="step_order_numberconfirmation">
                                    <div class="os-step-form-buttons">
                                        <a href="#"
                                            class="latepoint-btn latepoint-btn-secondary step-edit-cancel-btn">Cancel</a>
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="latepoint-btn" id="submitconfirmation">Save Step</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-section-header">
                    <h3>Other Settings</h3>
                </div>
                <div class="os-form-w">
                    <form action="" data-os-action="settings__update">
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="45429e9a8b"><input type="hidden"
                            name="_wp_http_referer"
                            value="/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=settings__steps">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="os-form-sub-header">
                                    <h3>Booking Form Settings</h3>
                                </div>
                            </div>
                            <div class="white-box-content no-padding">
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Timezone</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal"><input
                                                type="hidden" name="settings[steps_show_timezone_selector]"
                                                value="off" id="settings_steps_show_timezone_selector">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_timezone_selector">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show timezone selector</label><span>Will
                                                    appear on datepicker step and customer dashboard</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal"><input
                                                type="hidden" name="settings[steps_show_timezone_info]" value="off"
                                                id="settings_steps_show_timezone_info">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_timezone_info">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show timezone
                                                    information</label><span>Will appear on verification, confirmation and
                                                    datepicker steps</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Agent Display</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_show_agent_bio]" value="off"
                                                id="settings_steps_show_agent_bio">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_agent_bio">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show link to leard more about
                                                    agents</label><span>A link to open information about agent will be added
                                                    to each agent tile</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_hide_agent_info]"
                                                value="off" id="settings_steps_hide_agent_info">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_hide_agent_info">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Hide agent name from summary and
                                                    confirmation</label><span>Check if you want to hide agent name from
                                                    showing up</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[allow_any_agent]" value="on"
                                                id="settings_allow_any_agent">
                                            <div data-controlled-toggle-id="lp-any-agent-settings"
                                                class="os-toggler on size-normal" data-is-string-value="true"
                                                data-for="settings_allow_any_agent">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Add "Any Agent" option to agent
                                                    selection</label><span>Customers can pick "Any agent" and system will
                                                    find a matching agent</span></div>
                                        </div>
                                        <div class="control-under-toggler" id="lp-any-agent-settings">
                                            <div class="os-form-group os-form-select-group os-form-group-transparent">
                                                <label for="settings_any_agent_order">If "Any Agent" is selected then
                                                    assign booking to</label><select name="settings[any_agent_order]"
                                                    id="settings_any_agent_order" class="os-form-control">
                                                    <option value="random" selected="">Randomly picked agent</option>
                                                    <option value="price_high">Most expensive agent</option>
                                                    <option value="price_low">Least expensive agent</option>
                                                    <option value="busy_high">Agent with the most bookings on that day
                                                    </option>
                                                    <option value="busy_low">Agent with the least bookings on that day
                                                    </option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Other Settings</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_show_service_categories]"
                                                value="on" id="settings_steps_show_service_categories">
                                            <div class="os-toggler on size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_service_categories">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show service categories</label><span>If
                                                    turned on, services will be displayed in categories</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_skip_verify_step]"
                                                value="off" id="settings_steps_skip_verify_step">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_skip_verify_step">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Skip verification
                                                    step</label><span>Sends user directly to confirmation step, skipping any
                                                    confirmation</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_show_location_categories]"
                                                value="off" id="settings_steps_show_location_categories">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_location_categories">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show location
                                                    categories</label><span>If turned on, locations will be displayed in
                                                    categories</span></div>
                                        </div>
                                        <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                            <input type="hidden" name="settings[steps_show_duration_in_minutes]"
                                                value="off" id="settings_steps_show_duration_in_minutes">
                                            <div class="os-toggler off size-normal" data-is-string-value="true"
                                                data-for="settings_steps_show_duration_in_minutes">
                                                <div class="toggler-rail">
                                                    <div class="toggler-pill"></div>
                                                </div>
                                            </div>
                                            <div class="os-toggler-label-w"><label>Show service durations in
                                                    minutes</label><span>Will show duration in minutes, even when duration
                                                    is longer than 60 minutes</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Left Panel</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group os-form-control-wp-editor-group"><label
                                                for="settings[steps_support_text]">Content for a bottom part of a booking
                                                side panel</label>
                                            <div id="wp-settings_steps_support_text-wrap"
                                                class="wp-core-ui wp-editor-wrap tmce-active">
                                                <link rel="stylesheet" id="editor-buttons-css"
                                                    href="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-includes/css/editor.min.css?ver=6.5.3"
                                                    media="all">
                                                <div id="wp-settings_steps_support_text-editor-tools"
                                                    class="wp-editor-tools hide-if-no-js">
                                                    <div class="wp-editor-tabs"><button type="button"
                                                            id="settings_steps_support_text-tmce"
                                                            class="wp-switch-editor switch-tmce"
                                                            data-wp-editor-id="settings_steps_support_text">Visual</button>
                                                        <button type="button" id="settings_steps_support_text-html"
                                                            class="wp-switch-editor switch-html"
                                                            data-wp-editor-id="settings_steps_support_text">Text</button>
                                                    </div>
                                                </div>
                                                <div id="wp-settings_steps_support_text-editor-container"
                                                    class="wp-editor-container">
                                                    <div id="qt_settings_steps_support_text_toolbar"
                                                        class="quicktags-toolbar hide-if-no-js"><input type="button"
                                                            id="qt_settings_steps_support_text_strong"
                                                            class="ed_button button button-small" aria-label="Bold"
                                                            value="b"><input type="button"
                                                            id="qt_settings_steps_support_text_em"
                                                            class="ed_button button button-small" aria-label="Italic"
                                                            value="i"><input type="button"
                                                            id="qt_settings_steps_support_text_link"
                                                            class="ed_button button button-small"
                                                            aria-label="Insert link" value="link"><input
                                                            type="button" id="qt_settings_steps_support_text_block"
                                                            class="ed_button button button-small"
                                                            aria-label="Blockquote" value="b-quote"><input
                                                            type="button" id="qt_settings_steps_support_text_del"
                                                            class="ed_button button button-small"
                                                            aria-label="Deleted text (strikethrough)"
                                                            value="del"><input type="button"
                                                            id="qt_settings_steps_support_text_ins"
                                                            class="ed_button button button-small"
                                                            aria-label="Inserted text" value="ins"><input
                                                            type="button" id="qt_settings_steps_support_text_img"
                                                            class="ed_button button button-small"
                                                            aria-label="Insert image" value="img"><input
                                                            type="button" id="qt_settings_steps_support_text_ul"
                                                            class="ed_button button button-small"
                                                            aria-label="Bulleted list" value="ul"><input
                                                            type="button" id="qt_settings_steps_support_text_ol"
                                                            class="ed_button button button-small"
                                                            aria-label="Numbered list" value="ol"><input
                                                            type="button" id="qt_settings_steps_support_text_li"
                                                            class="ed_button button button-small" aria-label="List item"
                                                            value="li"><input type="button"
                                                            id="qt_settings_steps_support_text_code"
                                                            class="ed_button button button-small" aria-label="Code"
                                                            value="code"><input type="button"
                                                            id="qt_settings_steps_support_text_more"
                                                            class="ed_button button button-small"
                                                            aria-label="Insert Read More tag" value="more"><input
                                                            type="button" id="qt_settings_steps_support_text_close"
                                                            class="ed_button button button-small"
                                                            title="Close all open tags" value="close tags"></div>
                                                    <div id="mceu_24" class="mce-tinymce mce-container mce-panel"
                                                        hidefocus="1" tabindex="-1" role="application"
                                                        style="visibility: hidden; border-width: 1px; width: 100%;">
                                                        <div id="mceu_24-body"
                                                            class="mce-container-body mce-stack-layout">
                                                            <div id="mceu_25"
                                                                class="mce-top-part mce-container mce-stack-layout-item mce-first">
                                                                <div id="mceu_25-body" class="mce-container-body">
                                                                    <div id="mceu_26"
                                                                        class="mce-toolbar-grp mce-container mce-panel mce-first mce-last"
                                                                        hidefocus="1" tabindex="-1" role="group">
                                                                        <div id="mceu_26-body"
                                                                            class="mce-container-body mce-stack-layout">
                                                                            <div id="mceu_27"
                                                                                class="mce-container mce-toolbar mce-stack-layout-item mce-first"
                                                                                role="toolbar">
                                                                                <div id="mceu_27-body"
                                                                                    class="mce-container-body mce-flow-layout">
                                                                                    <div id="mceu_28"
                                                                                        class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group"
                                                                                        role="group">
                                                                                        <div id="mceu_28-body">
                                                                                            <div id="mceu_0"
                                                                                                class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first mce-btn-has-text"
                                                                                                tabindex="-1"
                                                                                                aria-labelledby="mceu_0"
                                                                                                role="button"
                                                                                                aria-haspopup="true">
                                                                                                <button id="mceu_0-open"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><span
                                                                                                        class="mce-txt">Paragraph</span>
                                                                                                    <i
                                                                                                        class="mce-caret"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_1"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Bold (Ctrl+B)">
                                                                                                <button id="mceu_1-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-bold"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_2"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Italic (Ctrl+I)">
                                                                                                <button id="mceu_2-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-italic"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_3"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Bulleted list (Shift+Alt+U)">
                                                                                                <button id="mceu_3-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-bullist"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_4"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Numbered list (Shift+Alt+O)">
                                                                                                <button id="mceu_4-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-numlist"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_5"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Blockquote (Shift+Alt+Q)">
                                                                                                <button id="mceu_5-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-blockquote"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_6"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Align left (Shift+Alt+L)">
                                                                                                <button id="mceu_6-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-alignleft"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_7"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Align center (Shift+Alt+C)">
                                                                                                <button id="mceu_7-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-aligncenter"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_8"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Align right (Shift+Alt+R)">
                                                                                                <button id="mceu_8-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-alignright"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_9"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Insert/edit link (Ctrl+K)">
                                                                                                <button id="mceu_9-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-link"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_10"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Insert Read More tag (Shift+Alt+T)">
                                                                                                <button
                                                                                                    id="mceu_10-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-wp_more"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_11"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Fullscreen">
                                                                                                <button
                                                                                                    id="mceu_11-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-fullscreen"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_12"
                                                                                                class="mce-widget mce-btn mce-last"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Toolbar Toggle (Shift+Alt+Z)">
                                                                                                <button
                                                                                                    id="mceu_12-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-wp_adv"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="mceu_29"
                                                                                class="mce-container mce-toolbar mce-stack-layout-item mce-last"
                                                                                role="toolbar" style="display: none;">
                                                                                <div id="mceu_29-body"
                                                                                    class="mce-container-body mce-flow-layout">
                                                                                    <div id="mceu_30"
                                                                                        class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group"
                                                                                        role="group">
                                                                                        <div id="mceu_30-body">
                                                                                            <div id="mceu_13"
                                                                                                class="mce-widget mce-btn mce-first"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Strikethrough (Shift+Alt+D)">
                                                                                                <button
                                                                                                    id="mceu_13-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-strikethrough"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_14"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Horizontal line">
                                                                                                <button
                                                                                                    id="mceu_14-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-hr"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_15"
                                                                                                class="mce-widget mce-btn mce-splitbtn mce-colorbutton"
                                                                                                role="button"
                                                                                                tabindex="-1"
                                                                                                aria-haspopup="true"
                                                                                                aria-label="Text color">
                                                                                                <button
                                                                                                    role="presentation"
                                                                                                    hidefocus="1"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-forecolor"></i><span
                                                                                                        id="mceu_15-preview"
                                                                                                        class="mce-preview"></span></button><button
                                                                                                    type="button"
                                                                                                    class="mce-open"
                                                                                                    hidefocus="1"
                                                                                                    tabindex="-1"> <i
                                                                                                        class="mce-caret"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_16"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                aria-pressed="false"
                                                                                                role="button"
                                                                                                aria-label="Paste as text">
                                                                                                <button
                                                                                                    id="mceu_16-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-pastetext"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_17"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Clear formatting">
                                                                                                <button
                                                                                                    id="mceu_17-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-removeformat"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_18"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Special character">
                                                                                                <button
                                                                                                    id="mceu_18-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-charmap"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_19"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Decrease indent">
                                                                                                <button
                                                                                                    id="mceu_19-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-outdent"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_20"
                                                                                                class="mce-widget mce-btn"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Increase indent">
                                                                                                <button
                                                                                                    id="mceu_20-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-indent"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_21"
                                                                                                class="mce-widget mce-btn mce-disabled"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Undo (Ctrl+Z)"
                                                                                                aria-disabled="true">
                                                                                                <button
                                                                                                    id="mceu_21-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-undo"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_22"
                                                                                                class="mce-widget mce-btn mce-disabled"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Redo (Ctrl+Y)"
                                                                                                aria-disabled="true">
                                                                                                <button
                                                                                                    id="mceu_22-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-redo"></i></button>
                                                                                            </div>
                                                                                            <div id="mceu_23"
                                                                                                class="mce-widget mce-btn mce-last"
                                                                                                tabindex="-1"
                                                                                                role="button"
                                                                                                aria-label="Keyboard Shortcuts (Shift+Alt+H)">
                                                                                                <button
                                                                                                    id="mceu_23-button"
                                                                                                    role="presentation"
                                                                                                    type="button"
                                                                                                    tabindex="-1"><i
                                                                                                        class="mce-ico mce-i-wp_help"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="mceu_31"
                                                                class="mce-edit-area mce-container mce-panel mce-stack-layout-item"
                                                                hidefocus="1" tabindex="-1" role="group"
                                                                style="border-width: 1px 0px 0px;"><iframe
                                                                    id="settings_steps_support_text_ifr" frameborder="0"
                                                                    allowtransparency="true"
                                                                    title="Rich Text Area. Press Alt-Shift-H for help."
                                                                    style="width: 100%; height: 184px; display: block;"></iframe>
                                                            </div>
                                                            <div id="mceu_32"
                                                                class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last"
                                                                hidefocus="1" tabindex="-1" role="group"
                                                                style="border-width: 1px 0px 0px;">
                                                                <div id="mceu_32-body"
                                                                    class="mce-container-body mce-flow-layout">
                                                                    <div id="mceu_33"
                                                                        class="mce-path mce-flow-layout-item mce-first">
                                                                        <div class="mce-path-item">&nbsp;</div>
                                                                    </div>
                                                                    <div id="mceu_34"
                                                                        class="mce-flow-layout-item mce-last mce-resizehandle">
                                                                        <i class="mce-ico mce-i-resize"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <textarea class="wp-editor-area" style="height: 150px; display: none;" autocomplete="off" cols="40"
                                                        name="settings[steps_support_text]" id="settings_steps_support_text" aria-hidden="true">&lt;h5&gt;Questions?&lt;/h5&gt;
                  Call (858) 939-3746 for help</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Conversion Tracking</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="latepoint-message latepoint-message-subtle">
                                            <div>You can include some javascript or html that will be appended to the
                                                confirmation step. For example you can track ad conversions by triggering a
                                                tracking code or a facebook pixel. You can use these variables within your
                                                code. Click on the variable to copy.</div>
                                        </div>
                                        <div class="tracking-info-w">
                                            <div class="available-vars-w">
                                                <div class="available-vars-i">
                                                    <div class="available-vars-block">
                                                        <ul>
                                                            <li><span class="var-label">Appointment ID#:</span> <span
                                                                    class="var-code os-click-to-copy">@{{ booking_id }}</span>
                                                            </li>
                                                            <li><span class="var-label">Service ID#:</span> <span
                                                                    class="var-code os-click-to-copy">@{{ service_id }}</span>
                                                            </li>
                                                            <li><span class="var-label">Agent ID#:</span> <span
                                                                    class="var-code os-click-to-copy">@{{ agent_id }}</span>
                                                            </li>
                                                            <li><span class="var-label">Customer ID#:</span> <span
                                                                    class="var-code os-click-to-copy">@{{ customer_id }}</span>
                                                            </li>
                                                            <li><span class="var-label">Total Price:</span> <span
                                                                    class="var-code os-click-to-copy">@{{ total_price }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tracking-code-input-w">
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered no-label">
                                                    <textarea type="text" placeholder="Enter Tracking code here" name="settings[confirmation_step_tracking_code]"
                                                        theme="bordered" rows="9" id="settings_confirmation_step_tracking_code" class="os-form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group"><button type="submit" name="submit"
                                                class="btn btn-primary" id="submit"><i
                                                    class="latepoint-icon latepoint-icon-checkmark"></i><span>Save
                                                    Settings</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('/assets/jquery.js')}}"></script>
    <script>
        $('.os-form-toggler-group').click(function() {
            var obj = $(this).children('.os-toggler');
            if (obj.hasClass('on')) {
                obj.removeClass('on');
                obj.addClass('off');
            } else {
                obj.removeClass('off');
                obj.addClass('on');
            }
        });

        $('.step-head').click(function() {
            $(this).parents('.step-w').toggleClass('editing');
        })
    </script>
@endsection
