@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page')

@section('content')
    <link href="{{ asset('/assets/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet">
    <div class="row">
        <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
            <div class="card-header mb-4 d-flex">
                <a href="{{ url('/settings/integrations-calendars') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">Calendars</h4>
                </a>
                <a href="{{ url('/settings/integrations-meeting') }}"
                    class="agent-status-active text-center mx-2 acitive-tab">
                    <h4 class="m-0 me-2">Meetings</h4>
                </a>
                <a href="{{ url('/settings/integrations-marketing') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">Marketing</h4>
                </a>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="latepoint-settings-w os-form-w">
                    @if ($check == 0)
                    <form action="{{route('settings-integrations-storemeeting')}}" data-os-action="settings__update" method="post">
                        @csrf
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="f1cd9b5daa"><input type="hidden"
                            name="_wp_http_referer"
                            value="/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=integrations__external_meeting_systems">
                        <div class="os-section-header">
                            <h3>Video Meeting Systems</h3>
                        </div>
                        <div class="os-togglable-items-w">
                            <div class="os-togglable-item-w">
                                <div class="os-togglable-item-head">
                                    <div class="os-toggler-w">
                                        <input type="hidden" name="settings[enable_google_meet]" value="off"
                                            id="settings_enable_google_meet">
                                        <div data-controlled-toggle-id="toggleMeetingSystemSettings_google_meet"
                                            class="os-toggler size-large off" data-is-string-value="true"
                                            data-for="settings_enable_google_meet">
                                            <div class="toggler-rail">
                                                <div class="toggler-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-togglable-item-name">Google Meet</div>
                                </div>
                                <div class="os-togglable-item-body" style="display: none;"
                                    id="toggleMeetingSystemSettings_google_meet">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>API Credentials</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">Google Meet uses the
                                                same API keys you set in Google Calendar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="os-togglable-item-w">
                                <div class="os-togglable-item-head">
                                    <div class="os-toggler-w">
                                        <input type="hidden" name="settings[enable_zoom]" value="off"
                                            id="settings_enable_zoom">
                                        <div data-controlled-toggle-id="toggleMeetingSystemSettings_zoom"
                                            class="os-toggler size-large off" data-is-string-value="true"
                                            data-for="settings_enable_zoom">
                                            <div class="toggler-rail">
                                                <div class="toggler-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-togglable-item-name">Zoom</div>
                                </div>
                                <div class="os-togglable-item-body" style="display: none;"
                                    id="toggleMeetingSystemSettings_zoom">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>API Credentials</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-row">
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_account_id">Account ID</label><input
                                                            type="text" placeholder="Account ID"
                                                            name="settings[zoom_account_id]" value=""
                                                            id="settings_zoom_account_id" class="os-form-control"></div>
                                                </div>
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_client_id">Client ID</label><input
                                                            type="text" placeholder="Client ID"
                                                            name="settings[zoom_client_id]" value=""
                                                            id="settings_zoom_client_id" class="os-form-control"></div>
                                                </div>
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_client_secret">Client Secret</label><input
                                                            type="password" placeholder="Client Secret"
                                                            name="settings[zoom_client_secret]" value=""
                                                            id="settings_zoom_client_secret" class="os-form-control"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Other Settings</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">You can use variables
                                                in these templates, they will be replaced with a value for the booking. <a
                                                    href="#"
                                                    class="field-note-info-link open-template-variables-panel"><i
                                                        class="latepoint-icon latepoint-icon-info"></i><span>Show Available
                                                        Variables</span></a></div>
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-simple has-value">
                                                <label for="settings_zoom_meeting_topic_template">Template For Meeting
                                                    Topic</label><input type="text"
                                                    placeholder="Template For Meeting Topic"
                                                    name="settings[zoom_meeting_topic_template]"
                                                    value="@{{ service_name }}" id="settings_zoom_meeting_topic_template"
                                                    class="os-form-control"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="os-form-buttons">
                            <div class="os-form-group"><button type="submit" name="submit" class="latepoint-btn"
                                    id="submit">Save Settings</button></div>
                        </div>
                    </form>
                    @else
                    <form action="{{route('settings-integrations-updatemeeting', $result->id)}}" data-os-action="settings__update" method="post">
                        @csrf
                        @php
                            $value = unserialize($result->value);
                        @endphp
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="f1cd9b5daa"><input type="hidden"
                            name="_wp_http_referer"
                            value="/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=integrations__external_meeting_systems">
                        <div class="os-section-header">
                            <h3>Video Meeting Systems</h3>
                        </div>
                        <div class="os-togglable-items-w">
                            <div class="os-togglable-item-w">
                                <div class="os-togglable-item-head">
                                    <div class="os-toggler-w">
                                        <input type="hidden" name="settings[enable_google_meet]" value="off"
                                            id="settings_enable_google_meet">
                                        <div data-controlled-toggle-id="toggleMeetingSystemSettings_google_meet"
                                            class="os-toggler size-large off" data-is-string-value="true"
                                            data-for="settings_enable_google_meet">
                                            <div class="toggler-rail">
                                                <div class="toggler-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-togglable-item-name">Google Meet</div>
                                </div>
                                <div class="os-togglable-item-body" style="display: none;"
                                    id="toggleMeetingSystemSettings_google_meet">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>API Credentials</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">Google Meet uses the
                                                same API keys you set in Google Calendar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="os-togglable-item-w">
                                <div class="os-togglable-item-head">
                                    <div class="os-toggler-w">
                                        <input type="hidden" name="settings[enable_zoom]" value="{{htmlspecialchars($value['enable_zoom']) }}"
                                            id="settings_enable_zoom">
                                        <div data-controlled-toggle-id="toggleMeetingSystemSettings_zoom"
                                            class="os-toggler size-large {{htmlspecialchars($value['enable_zoom']) }}" data-is-string-value="true"
                                            data-for="settings_enable_zoom">
                                            <div class="toggler-rail">
                                                <div class="toggler-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="os-togglable-item-name">Zoom</div>
                                </div>
                                <div class="os-togglable-item-body" style="display: none;"
                                    id="toggleMeetingSystemSettings_zoom">
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>API Credentials</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="os-row">
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_account_id">Account ID</label><input
                                                            type="text" placeholder="Account ID"
                                                            name="settings[zoom_account_id]" value="{{htmlspecialchars($value['zoom_account_id']) }}"
                                                            id="settings_zoom_account_id" class="os-form-control"></div>
                                                </div>
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_client_id">Client ID</label><input
                                                            type="text" placeholder="Client ID"
                                                            name="settings[zoom_client_id]" value="{{htmlspecialchars($value['zoom_client_id']) }}"
                                                            id="settings_zoom_client_id" class="os-form-control"></div>
                                                </div>
                                                <div class="os-col-4">
                                                    <div class="os-form-group os-form-textfield-group os-form-group-simple">
                                                        <label for="settings_zoom_client_secret">Client Secret</label><input
                                                            type="password" placeholder="Client Secret"
                                                            name="settings[zoom_client_secret]" value="{{htmlspecialchars($value['zoom_client_secret']) }}"
                                                            id="settings_zoom_client_secret" class="os-form-control"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-section-row">
                                        <div class="sub-section-label">
                                            <h3>Other Settings</h3>
                                        </div>
                                        <div class="sub-section-content">
                                            <div class="latepoint-message latepoint-message-subtle">You can use variables
                                                in these templates, they will be replaced with a value for the booking. <a
                                                    href="#"
                                                    class="field-note-info-link open-template-variables-panel"><i
                                                        class="latepoint-icon latepoint-icon-info"></i><span>Show Available
                                                        Variables</span></a></div>
                                            <div
                                                class="os-form-group os-form-textfield-group os-form-group-simple has-value">
                                                <label for="settings_zoom_meeting_topic_template">Template For Meeting
                                                    Topic</label><input type="text"
                                                    placeholder="Template For Meeting Topic"
                                                    name="settings[zoom_meeting_topic_template]"
                                                    value="{{htmlspecialchars($value['zoom_meeting_topic_template']) }}" id="settings_zoom_meeting_topic_template"
                                                    class="os-form-control"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="os-form-buttons">
                            <div class="os-form-group"><button type="submit" name="submit" class="latepoint-btn"
                                    id="submit">Save Settings</button></div>
                        </div>
                    </form>
                    @endif
                    
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

        $('.os-toggler-w').click(function() {
            var obj = $(this).children('.os-toggler');
            if (obj.hasClass('on')) {
                obj.removeClass('on');
                obj.addClass('off');
                obj.parents('.os-togglable-item-w').children('.os-togglable-item-body').hide();
            } else {
                obj.removeClass('off');
                obj.addClass('on');
                obj.parents('.os-togglable-item-w').children('.os-togglable-item-body').show();
            }
        });
    </script>
@endsection
