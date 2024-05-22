@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page')

@section('content')
    <link href="{{ asset('/assets/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet">
    <div class="latepoint-content ">
        <div class="os-section-header">
            <h3>Default Fields</h3>
        </div>
        <div class="os-default-fields" data-route="settings__update_default_fields">
            <form>
                <div class="os-default-field ">
                    <div class="os-toggler on" data-for="default_fields_first_name_active">
                        <div class="toggler-rail">
                            <div class="toggler-pill"></div>
                        </div>
                    </div><input type="hidden" name="default_fields[first_name][active]" value="1"
                        id="default_fields_first_name_active">
                    <div class="os-field-name">First Name</div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-checkbox-group is-checked"><label
                                for="default_fields_first_name_required"><input type="hidden"
                                    name="default_fields[first_name][required]" value="off"><input type="checkbox"
                                    name="default_fields[first_name][required]" value="on" checked=""
                                    id="default_fields_first_name_required" class="os-form-checkbox">Required?</label></div>
                    </div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                name="default_fields[first_name][width]" id="default_fields_first_name_width"
                                class="os-form-control">
                                <option value="os-col-12">Full Width</option>
                                <option value="os-col-6" selected="">Half Width</option>
                            </select></div>
                    </div>
                </div>
                <div class="os-default-field ">
                    <div class="os-toggler on" data-for="default_fields_last_name_active">
                        <div class="toggler-rail">
                            <div class="toggler-pill"></div>
                        </div>
                    </div><input type="hidden" name="default_fields[last_name][active]" value="1"
                        id="default_fields_last_name_active">
                    <div class="os-field-name">Last Name</div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-checkbox-group is-checked"><label
                                for="default_fields_last_name_required"><input type="hidden"
                                    name="default_fields[last_name][required]" value="off"><input type="checkbox"
                                    name="default_fields[last_name][required]" value="on" checked=""
                                    id="default_fields_last_name_required" class="os-form-checkbox">Required?</label></div>
                    </div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                name="default_fields[last_name][width]" id="default_fields_last_name_width"
                                class="os-form-control">
                                <option value="os-col-12">Full Width</option>
                                <option value="os-col-6" selected="">Half Width</option>
                            </select></div>
                    </div>
                </div>
                <div class="os-default-field ">
                    <div class="locked-field"><i class="latepoint-icon latepoint-icon-lock"></i><span>Email Address field
                            can not be disabled.</span></div>
                    <div class="os-field-name">Email Address</div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-checkbox-group is-checked"><label
                                for="default_fields_email_required"><input type="hidden"
                                    name="default_fields[email][required]" value="off"><input type="checkbox"
                                    name="default_fields[email][required]" value="on" checked="" disabled="disabled"
                                    id="default_fields_email_required" class="os-form-checkbox">Required?</label></div>
                    </div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                name="default_fields[email][width]" id="default_fields_email_width" class="os-form-control">
                                <option value="os-col-12">Full Width</option>
                                <option value="os-col-6" selected="">Half Width</option>
                            </select></div>
                    </div>
                </div>
                <div class="os-default-field ">
                    <div class="os-toggler on" data-for="default_fields_phone_active">
                        <div class="toggler-rail">
                            <div class="toggler-pill"></div>
                        </div>
                    </div><input type="hidden" name="default_fields[phone][active]" value="1"
                        id="default_fields_phone_active">
                    <div class="os-field-name">Phone Number</div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-checkbox-group "><label
                                for="default_fields_phone_required"><input type="hidden"
                                    name="default_fields[phone][required]" value="off"><input type="checkbox"
                                    name="default_fields[phone][required]" value="on"
                                    id="default_fields_phone_required" class="os-form-checkbox">Required?</label></div>
                    </div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                name="default_fields[phone][width]" id="default_fields_phone_width"
                                class="os-form-control">
                                <option value="os-col-12">Full Width</option>
                                <option value="os-col-6" selected="">Half Width</option>
                            </select></div>
                    </div>
                </div>
                <div class="os-default-field ">
                    <div class="os-toggler on" data-for="default_fields_notes_active">
                        <div class="toggler-rail">
                            <div class="toggler-pill"></div>
                        </div>
                    </div><input type="hidden" name="default_fields[notes][active]" value="1"
                        id="default_fields_notes_active">
                    <div class="os-field-name">Comments</div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-checkbox-group "><label
                                for="default_fields_notes_required"><input type="hidden"
                                    name="default_fields[notes][required]" value="off"><input type="checkbox"
                                    name="default_fields[notes][required]" value="on"
                                    id="default_fields_notes_required" class="os-form-checkbox">Required?</label></div>
                    </div>
                    <div class="os-field-setting">
                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                name="default_fields[notes][width]" id="default_fields_notes_width"
                                class="os-form-control">
                                <option value="os-col-12" selected="">Full Width</option>
                                <option value="os-col-6">Half Width</option>
                            </select></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="os-section-header">
            <h3>Custom Fields</h3>
        </div>
        <div class="os-custom-fields-w os-draggable-form-blocks os-form-blocks-w"
            data-order-update-route="custom_fields__update_order" data-fields-for="customer">
        </div>
        <div class="os-add-box add-custom-field-box add-custom-field-trigger" data-os-params="fields_for=customer"
            data-os-action="custom_fields__new_form" data-os-output-target-do="append"
            data-os-output-target=".os-custom-fields-w">
            <div class="add-box-graphic-w">
                <div class="add-box-plus"><i class="latepoint-icon latepoint-icon-plus4"></i></div>
            </div>
            <div class="add-box-label">Add Custom Field</div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/jquery.js') }}"></script>
    <script>
        

        $('.os-toggler').click(function() {
            var obj = $(this);
            if (obj.hasClass('on')) {
                obj.removeClass('on');
                obj.addClass('off');
                obj.parents('.os-default-field').addClass('is-disabled');
            } else {
                obj.removeClass('off');
                obj.addClass('on');
                obj.parents('.os-default-field').removeClass('is-disabled');
            }
        });

        $('.os-add-box').click(function() {
          $('.os-custom-fields-w').append(`
            <form data-os-form-block-id="cf_UBXEI2RO" data-os-action="custom_fields__save" class="os-form-block os-form-block-type-text os-is-editing">
              <div class="os-form-block-i">
                <div class="os-form-block-header ">
                  <div class="os-form-block-drag"></div>
                  <div class="os-form-block-name">New Field</div>
                  <div class="os-form-block-type">text</div>
                  <div class="os-form-block-edit-btn"><i class="latepoint-icon latepoint-icon-edit-3"></i></div>
                </div>
                <div class="os-form-block-params os-form-w">
                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Field Label</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-textfield-group os-form-group-bordered no-label"><input type="text" placeholder="Enter Field Label" name="custom_fields[cf_UBXEI2RO][label]" value="" theme="bordered" class="os-form-block-name-input os-form-control" id="custom_fields_cf_ubxei2ro_label"></div>        </div>
                  </div>

                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Placeholder</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-textfield-group os-form-group-bordered no-label"><input type="text" placeholder="Enter Field Placeholder" name="custom_fields[cf_UBXEI2RO][placeholder]" value="" theme="bordered" id="custom_fields_cf_ubxei2ro_placeholder" class="os-form-control"></div>        </div>
                  </div>

                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Field Type</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-select-group os-form-group-transparent"><select name="custom_fields[cf_UBXEI2RO][type]" class="os-form-block-type-select os-form-control" id="custom_fields_cf_ubxei2ro_type"><option value="text" selected="">Text Field</option><option value="phone_number">Phone Number Field</option><option value="number">Number Field</option><option value="hidden">Hidden Field</option><option value="select">Select Box</option><option value="textarea">Text Area Field</option><option value="checkbox">Checkbox</option><option value="google_address_autocomplete">Google Address Autocomplete</option><option value="file_upload">File Upload</option></select></div>					<div class="custom-fields-google-places-api-status" style="display: none;" "="">
                        <div class="latepoint-message latepoint-message-warning mt-1">To use address field, you need to enter Google API key in general settings.</div>					</div>
                    </div>
                  </div>

                  <div class="sub-section-row custom-fields-select-values" style="display: none;">
                    <div class="sub-section-label">
                      <h3>Options List</h3>
                    </div>
                    <div class="sub-section-content">
                      <div><div class="os-form-group os-form-textfield-group os-form-textarea-group os-form-group-bordered no-label"><textarea type="text" placeholder="Choices for Select. Enter each choice on a new line." name="custom_fields[cf_UBXEI2RO][options]" theme="bordered" rows="5" id="custom_fields_cf_ubxei2ro_options" class="os-form-control"></textarea></div></div>        </div>
                  </div>

                    <div class="sub-section-row custom-fields-default-value-row">
                        <div class="sub-section-label">
                            <h3>Default Value</h3>
                        </div>
                        <div class="sub-section-content">
                    <div class="os-form-group os-form-textfield-group os-form-group-bordered no-label"><input type="text" placeholder="Enter Field Default Value" name="custom_fields[cf_UBXEI2RO][value]" value="" theme="bordered" id="custom_fields_cf_ubxei2ro_value" class="os-form-control"></div>            </div>
                    </div>

                  
                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Field Width</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-select-group os-form-group-transparent"><select name="custom_fields[cf_UBXEI2RO][width]" id="custom_fields_cf_ubxei2ro_width" class="os-form-control"><option value="os-col-12" selected="">Full Width</option><option value="os-col-6">Half Width</option></select></div>        </div>
                  </div>

                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Field Visibility</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-select-group os-form-group-transparent"><select name="custom_fields[cf_UBXEI2RO][visibility]" id="custom_fields_cf_ubxei2ro_visibility" class="os-form-control"><option value="public">Visible to Everyone</option><option value="admin_agent">Admin and Agents Only</option><option value="hidden">Temporary Hidden</option></select></div>        </div>
                  </div>

                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Required</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-toggler-group  size-normal"><input type="hidden" name="custom_fields[cf_UBXEI2RO][required]" value="off" id="custom_fields_cf_ubxei2ro_required"><div class="os-toggler off size-normal" data-is-string-value="true" data-for="custom_fields_cf_ubxei2ro_required"><div class="toggler-rail"><div class="toggler-pill"></div></div></div><div class="os-toggler-label-w"><label>Make this field required</label></div></div>        </div>
                  </div>

                  <div class="sub-section-row">
                    <div class="sub-section-label">
                      <h3>Hide from Summary</h3>
                    </div>
                    <div class="sub-section-content">
                      <div class="os-form-group os-form-toggler-group  size-normal"><input type="hidden" name="custom_fields[cf_UBXEI2RO][hide_on_summary]" value="off" id="custom_fields_cf_ubxei2ro_hide_on_summary"><div class="os-toggler off size-normal" data-is-string-value="true" data-for="custom_fields_cf_ubxei2ro_hide_on_summary"><div class="toggler-rail"><div class="toggler-pill"></div></div></div><div class="os-toggler-label-w"><label>Hide from Summary Panel and Confirmation Step</label></div></div>        </div>
                  </div>

                  <div class="os-form-block-buttons">
                    <a href="javascript:;" class="latepoint-btn latepoint-btn-danger pull-left os-remove-custom-field" data-os-prompt="Are you sure you want to delete this field?" data-os-after-call="latepoint_custom_field_removed" data-os-pass-this="yes" data-os-action="custom_fields__destroy" data-os-params="id=cf_UBXEI2RO&amp;fields_for=customer">Delete</a>
                    <button type="submit" class="os-form-block-save-btn latepoint-btn latepoint-btn-primary"><span>Save Field</span></button>
                  </div>
                </div>
              </div>
              <input type="hidden" name="custom_fields[cf_UBXEI2RO][id]" value="cf_UBXEI2RO" class="os-form-block-id" id="custom_fields_cf_ubxei2ro_id">	<input type="hidden" name="fields_for" value="customer" id="fields_for">	<a href="#" data-os-prompt="Are you sure you want to delete this field?" data-os-after-call="latepoint_custom_field_removed" data-os-pass-this="yes" data-os-action="custom_fields__destroy" data-os-params="id=cf_UBXEI2RO&amp;fields_for=customer" class="os-remove-form-block"><i class="latepoint-icon latepoint-icon-cross"></i></a>
            </form>
          `);
        });

        $('body').on('click', '.os-form-block-header', function() {
            $(this).parents('.os-form-block').toggleClass('os-is-editing')
        });

        $('body').on('click', '.os-remove-form-block', function() {
            if (confirm($(this).attr('data-os-prompt'))) {
                $(this).parents('.os-form-block').remove();
            }
        });
        $('body').on('click', '.os-remove-custom-field', function() {
            if (confirm($(this).attr('data-os-prompt'))) {
                $(this).parents('.os-form-block').remove();
            }
        });

        $('body').on('click', '.os-form-toggler-group', function() {
            var obj = $(this).children('.os-toggler');
            if (obj.hasClass('on')) {
                obj.removeClass('on');
                obj.addClass('off');
            } else {
                obj.removeClass('off');
                obj.addClass('on');
            }
        });

        
    </script>
@endsection
