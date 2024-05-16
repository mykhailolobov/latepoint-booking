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
                <a href="{{ url('/settings/steps') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">Steps</h4>
                </a>
                <a href="{{ url('/settings/payments') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Payments</h4>
                </a>
                <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Notifications</h4>
                </a>
                <a href="{{ url('/settings/roles') }}" class="agent-status-active text-center mx-2 acitive-tab">
                    <h4 class="m-0 me-2">Roles</h4>
                </a>
                <a href="{{ url('/settings/system') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">System</h4>
                </a>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="latepoint-content ">
                    <div class="os-section-header">
                        <h3>Default Roles</h3>
                    </div>
                    <div class="os-default-roles-w mb-4 os-form-blocks-w">
                        <form action="" data-os-action="roles__save"
                            class="os-form-block os-user-type-form os-is-editing">
                            <div class="os-form-block-i">
                                <div class="os-form-block-header">
                                    <div class="os-form-block-drag"></div>
                                    <div class="os-form-block-name update-from-name">Administrator</div>
                                    <div class="os-form-block-type">1 user</div>
                                    <div class="os-form-block-edit-btn">
                                        <i class="latepoint-icon latepoint-icon-edit-3"></i>
                                    </div>
                                </div>
                                <div class="os-form-block-params os-form-w">
                                    <input type="hidden" name="role[wp_role]" value="administrator" id="role_wp_role">
                                    <input type="hidden" name="role[user_type]" value="admin" id="role_user_type">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Users</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="role-users-wrapper">
                                                <div class="role-user-wrapper" data-os-output-target="side-panel"
                                                    data-os-after-call="latepointRoleManagerAddonAdmin.init_edit_wp_user_form"
                                                    data-os-action="roles__edit_wp_user" data-os-params="id=33510">
                                                    <div class="ru-main-info">
                                                        <div class="ru-avatar"
                                                            style="background-image: url(https://secure.gravatar.com/avatar/ea50452414da73d7519f0cf07b2831fe?s=96&amp;d=mm&amp;r=g)">
                                                        </div>
                                                        <div class="ru-wp-user-name">
                                                            <div class="ru-name">Sandbox Site Admin</div>
                                                            <div class="ru-email">lnicely@me.com</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Allowed Records</h3>
                                        </div>
                                        <div class="sub-section-content">

                                            <div class="latepoint-message latepoint-message-subtle">Users with
                                                "Administrator" role are allowed to perform all available actions on any
                                                agent, location and service records.</div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Permitted Actions</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="role-actions-grid">
                                                <div class="latepoint-message latepoint-message-subtle">Users with
                                                    "Administrator" role are permitted to execute all available actions in
                                                    the system.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="" data-os-action="roles__save"
                            class="os-form-block os-user-type-form os-is-editing">
                            <div class="os-form-block-i">
                                <div class="os-form-block-header">
                                    <div class="os-form-block-drag"></div>
                                    <div class="os-form-block-name update-from-name">LatePoint Agent</div>
                                    <div class="os-form-block-type">0 users</div>
                                    <div class="os-form-block-edit-btn">
                                        <i class="latepoint-icon latepoint-icon-edit-3"></i>
                                    </div>
                                </div>
                                <div class="os-form-block-params os-form-w">
                                    <input type="hidden" name="role[wp_role]" value="latepoint_agent" id="role_wp_role">
                                    <input type="hidden" name="role[user_type]" value="agent" id="role_user_type">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Users</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">You have not assigned
                                                any WordPress users to this role. Create a new WP user or edit existing user
                                                and assign them a role called: "<span class="update-from-name">LatePoint
                                                    Agent</span>"</div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Allowed Records</h3>
                                        </div>
                                        <div class="sub-section-content">

                                            <div class="latepoint-message latepoint-message-subtle">Users with
                                                "Administrator" role can execute permitted actions only on records that
                                                belong to a LatePoint agent they are connected to.</div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Permitted Actions</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="role-actions-grid">
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Agents</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__view]"
                                                                value="on" id="role_capabilities_agent_view">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__delete]"
                                                                value="off" id="role_capabilities_agent_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__create]"
                                                                value="off" id="role_capabilities_agent_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__edit]"
                                                                value="on" id="role_capabilities_agent_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Services</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][service__view]"
                                                                value="off" id="role_capabilities_service_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][service__delete]" value="off"
                                                                id="role_capabilities_service_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][service__create]" value="off"
                                                                id="role_capabilities_service_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][service__edit]"
                                                                value="off" id="role_capabilities_service_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Locations</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__view]" value="off"
                                                                id="role_capabilities_location_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__delete]" value="off"
                                                                id="role_capabilities_location_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__create]" value="off"
                                                                id="role_capabilities_location_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__edit]" value="off"
                                                                id="role_capabilities_location_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Bookings</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][booking__view]"
                                                                value="on" id="role_capabilities_booking_view">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][booking__delete]" value="on"
                                                                id="role_capabilities_booking_delete">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][booking__create]" value="on"
                                                                id="role_capabilities_booking_create">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][booking__edit]"
                                                                value="on" id="role_capabilities_booking_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Customers</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__view]" value="on"
                                                                id="role_capabilities_customer_view">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__delete]" value="on"
                                                                id="role_capabilities_customer_delete">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__create]" value="on"
                                                                id="role_capabilities_customer_create">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__edit]" value="on"
                                                                id="role_capabilities_customer_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Transactions</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__view]"
                                                                value="on" id="role_capabilities_transaction_view">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__delete]"
                                                                value="on" id="role_capabilities_transaction_delete">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__create]"
                                                                value="on" id="role_capabilities_transaction_create">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__edit]"
                                                                value="on" id="role_capabilities_transaction_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Activity Logs</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__view]" value="on"
                                                                id="role_capabilities_activity_view">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__delete]" value="on"
                                                                id="role_capabilities_activity_delete">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__create]" value="on"
                                                                id="role_capabilities_activity_create">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__edit]" value="on"
                                                                id="role_capabilities_activity_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Chat</h3>
                                                        <div class="role-actions-group-description">Ability to send
                                                            messages to customers (available with chat addon).</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][chat__edit]"
                                                                value="on" id="role_capabilities_chat_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_chat_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Resource Schedules</h3>
                                                        <div class="role-actions-group-description">Edit custom schedule of
                                                            individual agent, location or service.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][resource_schedule__edit]"
                                                                value="on"
                                                                id="role_capabilities_resource_schedule_edit">
                                                            <div class="os-toggler on size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_resource_schedule_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Settings</h3>
                                                        <div class="role-actions-group-description">Access to all settings
                                                            pages, including general schedule and booking steps.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][settings__edit]" value="off"
                                                                id="role_capabilities_settings_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_settings_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Connections</h3>
                                                        <div class="role-actions-group-description">Ability to connect
                                                            agents to services and locations.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][connection__edit]" value="off"
                                                                id="role_capabilities_connection_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_connection_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Coupons</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][coupon__view]"
                                                                value="off" id="role_capabilities_coupon_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__delete]" value="off"
                                                                id="role_capabilities_coupon_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__create]" value="off"
                                                                id="role_capabilities_coupon_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][coupon__edit]"
                                                                value="off" id="role_capabilities_coupon_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-form-block-buttons">
                                        <button type="submit"
                                            class="os-form-block-save-btn btn btn-primary"><span>Save
                                                Changes</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="os-section-header">
                        <h3>Custom Roles</h3>
                    </div>
                    <div class="os-custom-roles-w os-form-blocks-w">
                        <form action="" data-os-action="roles__save"
                            class="os-form-block os-user-type-form os-is-editing">
                            <div class="os-form-block-i">
                                <div class="os-form-block-header">
                                    <div class="os-form-block-drag"></div>
                                    <div class="os-form-block-name update-from-name">New Custom Role</div>
                                    <div class="os-form-block-type">0 users</div>
                                    <div class="os-form-block-edit-btn">
                                        <i class="latepoint-icon latepoint-icon-edit-3"></i>
                                    </div>
                                </div>
                                <div class="os-form-block-params os-form-w">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Name</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-bordered has-value no-label">
                                                <input type="text" placeholder="" name="role[name]"
                                                    value="New Custom Role" theme="bordered" id="role_name"
                                                    class="os-form-control"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="role[wp_role]" value="role_AuuNwSTd" id="role_wp_role">
                                    <input type="hidden" name="role[user_type]" value="custom" id="role_user_type">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Users</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">You have not assigned
                                                any WordPress users to this role. Create a new WP user or edit existing user
                                                and assign them a role called: "<span class="update-from-name">New Custom
                                                    Role</span>"</div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Allowed Records</h3>
                                        </div>
                                        <div class="sub-section-content">

                                            <div class="latepoint-message latepoint-message-subtle">Once you assign users
                                                to this role, they will appear in "Users" section above, click on each user
                                                to set restrictions on which records each of them can access.</div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Permitted Actions</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="role-actions-grid">
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Agents</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__view]"
                                                                value="off" id="role_capabilities_agent_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__delete]"
                                                                value="off" id="role_capabilities_agent_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__create]"
                                                                value="off" id="role_capabilities_agent_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][agent__edit]"
                                                                value="off" id="role_capabilities_agent_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_agent_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Services</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][service__view]"
                                                                value="off" id="role_capabilities_service_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][service__delete]" value="off"
                                                                id="role_capabilities_service_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][service__create]" value="off"
                                                                id="role_capabilities_service_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][service__edit]"
                                                                value="off" id="role_capabilities_service_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_service_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Locations</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__view]" value="off"
                                                                id="role_capabilities_location_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__delete]" value="off"
                                                                id="role_capabilities_location_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__create]" value="off"
                                                                id="role_capabilities_location_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][location__edit]" value="off"
                                                                id="role_capabilities_location_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_location_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Bookings</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][booking__view]"
                                                                value="off" id="role_capabilities_booking_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][booking__delete]" value="off"
                                                                id="role_capabilities_booking_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][booking__create]" value="off"
                                                                id="role_capabilities_booking_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][booking__edit]"
                                                                value="off" id="role_capabilities_booking_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_booking_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Customers</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__view]" value="off"
                                                                id="role_capabilities_customer_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__delete]" value="off"
                                                                id="role_capabilities_customer_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__create]" value="off"
                                                                id="role_capabilities_customer_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][customer__edit]" value="off"
                                                                id="role_capabilities_customer_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_customer_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Transactions</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__view]"
                                                                value="off" id="role_capabilities_transaction_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__delete]"
                                                                value="off" id="role_capabilities_transaction_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__create]"
                                                                value="off" id="role_capabilities_transaction_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][transaction__edit]"
                                                                value="off" id="role_capabilities_transaction_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_transaction_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Activity Logs</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__view]" value="off"
                                                                id="role_capabilities_activity_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__delete]" value="off"
                                                                id="role_capabilities_activity_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__create]" value="off"
                                                                id="role_capabilities_activity_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][activity__edit]" value="off"
                                                                id="role_capabilities_activity_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_activity_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Chat</h3>
                                                        <div class="role-actions-group-description">Ability to send
                                                            messages to customers (available with chat addon).</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden" name="role[capabilities][chat__edit]"
                                                                value="off" id="role_capabilities_chat_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_chat_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Resource Schedules</h3>
                                                        <div class="role-actions-group-description">Edit custom schedule
                                                            of individual agent, location or service.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][resource_schedule__edit]"
                                                                value="off"
                                                                id="role_capabilities_resource_schedule_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_resource_schedule_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Settings</h3>
                                                        <div class="role-actions-group-description">Access to all settings
                                                            pages, including general schedule and booking steps.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][settings__edit]" value="off"
                                                                id="role_capabilities_settings_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_settings_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Connections</h3>
                                                        <div class="role-actions-group-description">Ability to connect
                                                            agents to services and locations.</div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][connection__edit]"
                                                                value="off" id="role_capabilities_connection_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_connection_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="role-actions-item">
                                                    <div class="role-actions-group-name">
                                                        <h3>Coupons</h3>
                                                        <div class="role-actions-group-description"></div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__view]" value="off"
                                                                id="role_capabilities_coupon_view">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_view">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>View</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__delete]" value="off"
                                                                id="role_capabilities_coupon_delete">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_delete">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Delete</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__create]" value="off"
                                                                id="role_capabilities_coupon_create">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_create">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Create</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="role-toggler-wrapper">
                                                        <div class="os-form-group os-form-toggler-group  size-normal">
                                                            <input type="hidden"
                                                                name="role[capabilities][coupon__edit]" value="off"
                                                                id="role_capabilities_coupon_edit">
                                                            <div class="os-toggler off size-normal"
                                                                data-is-string-value="true"
                                                                data-for="role_capabilities_coupon_edit">
                                                                <div class="toggler-rail">
                                                                    <div class="toggler-pill"></div>
                                                                </div>
                                                            </div>
                                                            <div class="os-toggler-label-w"><label>Edit</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-form-block-buttons">
                                        <a href="#"
                                            class="btn btn-danger pull-left os-remove-role"
                                            data-os-prompt="Are you sure you want to delete this role?"
                                            data-os-after-call="latepointRoleManagerAddonAdmin.role_deleted"
                                            data-os-pass-this="yes" data-os-action="roles__destroy"
                                            data-os-params="wp_role=role_AuuNwSTd">Delete </a>
                                        <button type="submit"
                                            class="os-form-block-save-btn btn btn-primary"><span>Save
                                                Changes</span></button>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-os-prompt="Are you sure you want to delete this role?"
                                data-os-after-call="latepointRoleManagerAddonAdmin.role_deleted" data-os-pass-this="yes"
                                data-os-action="roles__destroy" data-os-params="wp_role=role_AuuNwSTd"
                                class="os-remove-form-block"><i class="latepoint-icon latepoint-icon-cross"></i></a>
                        </form>
                    </div>
                    <div class="os-add-box" data-os-after-call="latepointRoleManagerAddonAdmin.init_new_role_form"
                        data-os-action="roles__new_form" data-os-output-target-do="append"
                        data-os-output-target=".os-custom-roles-w">
                        <div class="add-box-graphic-w">
                            <div class="add-box-plus"><i class="latepoint-icon latepoint-icon-plus4"></i></div>
                        </div>
                        <div class="add-box-label">Create Custom Role</div>
                    </div>
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
</script>
@endsection
