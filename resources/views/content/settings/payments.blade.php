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
                <a href="{{ url('/settings/payments') }}" class="agent-status-active text-center mx-2 acitive-tab">
                    <h4 class="m-0 me-2">Payments</h4>
                </a>
                <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2 ">
                    <h4 class="m-0 me-2">Notifications</h4>
                </a>
                <a href="{{ url('/settings/roles') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">Roles</h4>
                </a>
                <a href="{{ url('/settings/system') }}" class="agent-status-active text-center mx-2">
                    <h4 class="m-0 me-2">System</h4>
                </a>
                <hr>
            </div>
            <div class="col-md-12 os-form-w">
                <form action="{{route('settings-storepayments')}}" data-os-action="settings__update" method="post">
                    @csrf
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="45429e9a8b">
                    <input type="hidden" name="_wp_http_referer" value="/demo_4217c15f9eb342a2/wp-admin/admin.php?page=latepoint&amp;route_name=settings__payments">
                    <div class="os-section-header">
                        <h3>Payment Processors</h3>
                    </div>
                    <div class="os-togglable-items-w">
                        <div class="os-togglable-item-w" id="paymentProcessorToggler_paypal">
                            <div class="os-togglable-item-head">
                                <div class="os-toggler-w">
                                    <input type="hidden" name="settings[enable_payment_processor_paypal]" value="off" id="settings_enable_payment_processor_paypal">
                                    <div data-controlled-toggle-id="togglePaymentSettings_paypal" class="os-toggler off size-large" data-is-string-value="true" data-for="settings_enable_payment_processor_paypal">
                                        <div class="toggler-rail">
                                            <div class="toggler-pill"></div>
                                        </div>
                                    </div>
                                </div>
                                <img class="os-togglable-item-logo-img"
                                    src="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/plugins/latepoint-payments-paypal/public/images/processor-logo.png">
                                <div class="os-togglable-item-name">PayPal</div>
                            </div>
                            <div class="os-togglable-item-body" style="display: none" id="togglePaymentSettings_paypal">

                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>API Keys</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-form-group os-form-textfield-group os-form-group-bordered"><label
                                                for="settings_paypal_client_id">Client ID</label><input type="text"
                                                placeholder="Client ID" name="settings[paypal_client_id]" value=""
                                                theme="bordered" id="settings_paypal_client_id" class="os-form-control">
                                        </div>
                                        <div class="os-form-group os-form-textfield-group os-form-group-bordered"><label
                                                for="settings_paypal_client_secret">Secret Key</label><input type="password"
                                                placeholder="Secret Key" name="settings[paypal_client_secret]"
                                                value="" theme="bordered" id="settings_paypal_client_secret"
                                                class="os-form-control"></div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Other Settings</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-row">
                                            <div class="os-col-6">
                                                <div class="os-form-group os-form-select-group os-form-group-transparent">
                                                    <label for="settings_paypal_country_code">Country</label><select
                                                        name="settings[paypal_country_code]"
                                                        id="settings_paypal_country_code" class="os-form-control">
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AG">Antigua &amp; Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="C2">China</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo - Brazzaville</option>
                                                        <option value="CD">Congo - Kinshasa</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte D’ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong Sar China</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn Islands</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">São Tomé &amp; Príncipe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SH">St. Helena</option>
                                                        <option value="KN">St. Kitts &amp; Nevis</option>
                                                        <option value="LC">St. Lucia</option>
                                                        <option value="PM">St. Pierre &amp; Miquelon</option>
                                                        <option value="VC">St. Vincent &amp; Grenadines</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad &amp; Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks &amp; Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US" selected="">United States</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican City</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis &amp; Futuna</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select></div>
                                            </div>
                                            <div class="os-col-6">
                                                <div class="os-form-group os-form-select-group os-form-group-transparent">
                                                    <label for="settings_paypal_currency_iso_code">Currency
                                                        Code</label><select name="settings[paypal_currency_iso_code]"
                                                        id="settings_paypal_currency_iso_code" class="os-form-control">
                                                        <option value="AUD">Australian dollar</option>
                                                        <option value="BRL">Brazilian real</option>
                                                        <option value="CAD">Canadian dollar</option>
                                                        <option value="COP">Colombian Pesos</option>
                                                        <option value="CZK">Czech koruna</option>
                                                        <option value="DKK">Danish krone</option>
                                                        <option value="EUR">Euro</option>
                                                        <option value="HKD">Hong Kong dollar</option>
                                                        <option value="HUF">Hungarian forint</option>
                                                        <option value="INR">Indian rupee</option>
                                                        <option value="ILS">Israeli new shekel</option>
                                                        <option value="JPY">Japanese yen</option>
                                                        <option value="MYR">Malaysian ringgit</option>
                                                        <option value="MXN">Mexican peso</option>
                                                        <option value="TWD">New Taiwan dollar</option>
                                                        <option value="NZD">New Zealand dollar</option>
                                                        <option value="NOK">Norwegian krone</option>
                                                        <option value="PHP">Philippine peso</option>
                                                        <option value="PLN">Polish złoty</option>
                                                        <option value="GBP">Pound sterling</option>
                                                        <option value="RUB">Russian ruble</option>
                                                        <option value="SGD">Singapore dollar</option>
                                                        <option value="SEK">Swedish krona</option>
                                                        <option value="CHF">Swiss franc</option>
                                                        <option value="THB">Thai baht</option>
                                                        <option value="USD" selected="">United States dollar
                                                        </option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="os-togglable-item-w" id="paymentProcessorToggler_stripe">
                            <div class="os-togglable-item-head">
                                <div class="os-toggler-w">
                                    <input type="hidden" name="settings[enable_payment_processor_stripe]" value="off"
                                        id="settings_enable_payment_processor_stripe">
                                    <div data-controlled-toggle-id="togglePaymentSettings_stripe"
                                        class="os-toggler off size-large" data-is-string-value="true"
                                        data-for="settings_enable_payment_processor_stripe">
                                        <div class="toggler-rail">
                                            <div class="toggler-pill"></div>
                                        </div>
                                    </div>
                                </div>
                                <img class="os-togglable-item-logo-img"
                                    src="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-content/plugins/latepoint-payments-stripe/public/images/processor-logo.png">
                                <div class="os-togglable-item-name">Stripe</div>
                            </div>
                            <div class="os-togglable-item-body" style="display: none" id="togglePaymentSettings_stripe">
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>API Keys</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-row">
                                            <div class="os-col-6">
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-group-transparent">
                                                    <label for="settings_stripe_secret_key">Secret Key</label><input
                                                        type="password" placeholder="Secret Key"
                                                        name="settings[stripe_secret_key]" value=""
                                                        id="settings_stripe_secret_key" class="os-form-control"></div>
                                            </div>
                                            <div class="os-col-6">
                                                <div
                                                    class="os-form-group os-form-textfield-group os-form-group-transparent">
                                                    <label for="settings_stripe_publishable_key">Publishable
                                                        Key</label><input type="text" placeholder="Publishable Key"
                                                        name="settings[stripe_publishable_key]" value=""
                                                        id="settings_stripe_publishable_key" class="os-form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Checkout Type</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="latepoint-message latepoint-message-subtle">There are two ways to
                                            accept payments via Stripe. 1. Stripe Elements: supports credit card and iDEAL
                                            payments directly in your booking form, matching its look and feel. 2. Stripe
                                            Checkout: supports more payment methods, but will redirect a customer to a
                                            Stripe hosted page to finish the payment.</div>
                                        <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                                name="settings[stripe_checkout_type]"
                                                class="display-toggler-control os-form-control"
                                                data-toggler-group="stripe-checkout-type"
                                                id="settings_stripe_checkout_type">
                                                <option value="elements" selected="">Stripe Elements</option>
                                                <option value="checkout">Stripe Checkout</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Payment Methods</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="stripe-elements-payments-grid display-toggler-target"
                                            data-toggler-group="stripe-checkout-type" data-toggler-key="elements"><input
                                                type="hidden" name="settings[stripe_elements_enabled_payment_methods]"
                                                value="" id="settings_stripe_elements_enabled_payment_methods">
                                            <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                    name="settings[stripe_elements_enabled_payment_methods][]"
                                                    value="card" checked=""
                                                    id="settings_stripe_elements_enabled_payment_methods_card"
                                                    class="os-form-checkbox" style="display: none;">
                                                <div class="os-toggler on size-normal" data-is-string-value="true"
                                                    data-for="settings_stripe_elements_enabled_payment_methods_card">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>Credit Card</label></div>
                                            </div>
                                            <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                    name="settings[stripe_elements_enabled_payment_methods][]"
                                                    value="ideal"
                                                    id="settings_stripe_elements_enabled_payment_methods_ideal"
                                                    class="os-form-checkbox" style="display: none;">
                                                <div class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="settings_stripe_elements_enabled_payment_methods_ideal">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>iDEAL</label></div>
                                            </div>
                                        </div>
                                        <div class="display-toggler-target" data-toggler-group="stripe-checkout-type"
                                            data-toggler-key="checkout" style="display: none;">
                                            <div class="os-form-group os-form-toggler-group  with-sub-label size-normal">
                                                <input type="hidden"
                                                    name="settings[stripe_checkout_manual_payment_methods]" value="off"
                                                    id="settings_stripe_checkout_manual_payment_methods">
                                                <div data-controlled-toggle-id="latepointStripeCheckoutManualPaymentMethods"
                                                    class="os-toggler off size-normal" data-is-string-value="true"
                                                    data-for="settings_stripe_checkout_manual_payment_methods">
                                                    <div class="toggler-rail">
                                                        <div class="toggler-pill"></div>
                                                    </div>
                                                </div>
                                                <div class="os-toggler-label-w"><label>I will pick here (Not
                                                        Recommended)</label><span>You should set enabled payment methods
                                                        through your Stripe Dashboard instead of setting them here</span>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="latepointStripeCheckoutManualPaymentMethods"
                                                class="stripe-checkout-payments-grid"><input type="hidden"
                                                    name="settings[stripe_checkout_enabled_payment_methods]"
                                                    value="" id="settings_stripe_checkout_enabled_payment_methods">
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="alipay"
                                                        id="settings_stripe_checkout_enabled_payment_methods_alipay"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_alipay">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Alipay</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="card" checked=""
                                                        id="settings_stripe_checkout_enabled_payment_methods_card"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler on size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_card">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Credit Cards</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="ideal"
                                                        id="settings_stripe_checkout_enabled_payment_methods_ideal"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_ideal">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>iDEAL</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="fpx"
                                                        id="settings_stripe_checkout_enabled_payment_methods_fpx"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_fpx">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>FPX</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="bacs_debit"
                                                        id="settings_stripe_checkout_enabled_payment_methods_bacs_debit"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_bacs_debit">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>BASC Payments</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="bancontact"
                                                        id="settings_stripe_checkout_enabled_payment_methods_bancontact"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_bancontact">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Bancontact</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="giropay"
                                                        id="settings_stripe_checkout_enabled_payment_methods_giropay"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_giropay">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Giropay</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="p24"
                                                        id="settings_stripe_checkout_enabled_payment_methods_p24"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_p24">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Przelewy24</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="eps"
                                                        id="settings_stripe_checkout_enabled_payment_methods_eps"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_eps">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>EPS Payments</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="sofort"
                                                        id="settings_stripe_checkout_enabled_payment_methods_sofort"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_sofort">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Sofort Payments</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="sepa_debit"
                                                        id="settings_stripe_checkout_enabled_payment_methods_sepa_debit"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_sepa_debit">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>SEPA Direct Debit</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="grabpay"
                                                        id="settings_stripe_checkout_enabled_payment_methods_grabpay"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_grabpay">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>GrabPay Payments</label></div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="afterpay_clearpay"
                                                        id="settings_stripe_checkout_enabled_payment_methods_afterpay_clearpay"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_afterpay_clearpay">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Afterpay and Clearpay</label>
                                                    </div>
                                                </div>
                                                <div class="os-form-group os-form-toggler-group"><input type="checkbox"
                                                        name="settings[stripe_checkout_enabled_payment_methods][]"
                                                        value="acss_debit"
                                                        id="settings_stripe_checkout_enabled_payment_methods_acss_debit"
                                                        class="os-form-checkbox" style="display: none;">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_checkout_enabled_payment_methods_acss_debit">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Canadian PAD (ACSS)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-section-row">
                                    <div class="sub-section-label">
                                        <h3>Other Settings</h3>
                                    </div>
                                    <div class="sub-section-content">
                                        <div class="os-row mb-2">
                                            <div class="os-col-6">
                                                <div class="os-form-group os-form-select-group os-form-group-transparent">
                                                    <label for="settings_stripe_country_code">Country</label><select
                                                        name="settings[stripe_country_code]"
                                                        id="settings_stripe_country_code" class="os-form-control">
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IN">India</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US" selected="">United States</option>
                                                    </select></div>
                                            </div>
                                            <div class="os-col-6">
                                                <div class="os-form-group os-form-select-group os-form-group-transparent">
                                                    <label for="settings_stripe_currency_iso_code">Currency
                                                        Code</label><select name="settings[stripe_currency_iso_code]"
                                                        id="settings_stripe_currency_iso_code" class="os-form-control">
                                                        <option value="usd" selected="">usd</option>
                                                        <option value="aed">aed</option>
                                                        <option value="afn">afn</option>
                                                        <option value="all">all</option>
                                                        <option value="amd">amd</option>
                                                        <option value="ang">ang</option>
                                                        <option value="aoa">aoa</option>
                                                        <option value="ars">ars</option>
                                                        <option value="aud">aud</option>
                                                        <option value="awg">awg</option>
                                                        <option value="azn">azn</option>
                                                        <option value="bam">bam</option>
                                                        <option value="bbd">bbd</option>
                                                        <option value="bdt">bdt</option>
                                                        <option value="bgn">bgn</option>
                                                        <option value="bif">bif</option>
                                                        <option value="bmd">bmd</option>
                                                        <option value="bnd">bnd</option>
                                                        <option value="bob">bob</option>
                                                        <option value="brl">brl</option>
                                                        <option value="bsd">bsd</option>
                                                        <option value="bwp">bwp</option>
                                                        <option value="bzd">bzd</option>
                                                        <option value="cad">cad</option>
                                                        <option value="cdf">cdf</option>
                                                        <option value="chf">chf</option>
                                                        <option value="clp">clp</option>
                                                        <option value="cny">cny</option>
                                                        <option value="cop">cop</option>
                                                        <option value="crc">crc</option>
                                                        <option value="cve">cve</option>
                                                        <option value="czk">czk</option>
                                                        <option value="djf">djf</option>
                                                        <option value="dkk">dkk</option>
                                                        <option value="dop">dop</option>
                                                        <option value="dzd">dzd</option>
                                                        <option value="egp">egp</option>
                                                        <option value="etb">etb</option>
                                                        <option value="eur">eur</option>
                                                        <option value="fjd">fjd</option>
                                                        <option value="fkp">fkp</option>
                                                        <option value="gbp">gbp</option>
                                                        <option value="gel">gel</option>
                                                        <option value="gip">gip</option>
                                                        <option value="gmd">gmd</option>
                                                        <option value="gnf">gnf</option>
                                                        <option value="gtq">gtq</option>
                                                        <option value="gyd">gyd</option>
                                                        <option value="hkd">hkd</option>
                                                        <option value="hnl">hnl</option>
                                                        <option value="hrk">hrk</option>
                                                        <option value="htg">htg</option>
                                                        <option value="huf">huf</option>
                                                        <option value="idr">idr</option>
                                                        <option value="ils">ils</option>
                                                        <option value="inr">inr</option>
                                                        <option value="isk">isk</option>
                                                        <option value="jmd">jmd</option>
                                                        <option value="jpy">jpy</option>
                                                        <option value="kes">kes</option>
                                                        <option value="kgs">kgs</option>
                                                        <option value="khr">khr</option>
                                                        <option value="kmf">kmf</option>
                                                        <option value="krw">krw</option>
                                                        <option value="kyd">kyd</option>
                                                        <option value="kzt">kzt</option>
                                                        <option value="lak">lak</option>
                                                        <option value="lbp">lbp</option>
                                                        <option value="lkr">lkr</option>
                                                        <option value="lrd">lrd</option>
                                                        <option value="lsl">lsl</option>
                                                        <option value="mad">mad</option>
                                                        <option value="mdl">mdl</option>
                                                        <option value="mga">mga</option>
                                                        <option value="mkd">mkd</option>
                                                        <option value="mmk">mmk</option>
                                                        <option value="mnt">mnt</option>
                                                        <option value="mop">mop</option>
                                                        <option value="mro">mro</option>
                                                        <option value="mur">mur</option>
                                                        <option value="mvr">mvr</option>
                                                        <option value="mwk">mwk</option>
                                                        <option value="mxn">mxn</option>
                                                        <option value="myr">myr</option>
                                                        <option value="mzn">mzn</option>
                                                        <option value="nad">nad</option>
                                                        <option value="ngn">ngn</option>
                                                        <option value="nio">nio</option>
                                                        <option value="nok">nok</option>
                                                        <option value="npr">npr</option>
                                                        <option value="nzd">nzd</option>
                                                        <option value="pab">pab</option>
                                                        <option value="pen">pen</option>
                                                        <option value="pgk">pgk</option>
                                                        <option value="php">php</option>
                                                        <option value="pkr">pkr</option>
                                                        <option value="pln">pln</option>
                                                        <option value="pyg">pyg</option>
                                                        <option value="qar">qar</option>
                                                        <option value="ron">ron</option>
                                                        <option value="rsd">rsd</option>
                                                        <option value="rub">rub</option>
                                                        <option value="rwf">rwf</option>
                                                        <option value="sar">sar</option>
                                                        <option value="sbd">sbd</option>
                                                        <option value="scr">scr</option>
                                                        <option value="sek">sek</option>
                                                        <option value="sgd">sgd</option>
                                                        <option value="shp">shp</option>
                                                        <option value="sll">sll</option>
                                                        <option value="sos">sos</option>
                                                        <option value="srd">srd</option>
                                                        <option value="std">std</option>
                                                        <option value="svc">svc</option>
                                                        <option value="szl">szl</option>
                                                        <option value="thb">thb</option>
                                                        <option value="tjs">tjs</option>
                                                        <option value="top">top</option>
                                                        <option value="try">try</option>
                                                        <option value="ttd">ttd</option>
                                                        <option value="twd">twd</option>
                                                        <option value="tzs">tzs</option>
                                                        <option value="uah">uah</option>
                                                        <option value="ugx">ugx</option>
                                                        <option value="uyu">uyu</option>
                                                        <option value="uzs">uzs</option>
                                                        <option value="vnd">vnd</option>
                                                        <option value="vuv">vuv</option>
                                                        <option value="wst">wst</option>
                                                        <option value="xaf">xaf</option>
                                                        <option value="xcd">xcd</option>
                                                        <option value="xof">xof</option>
                                                        <option value="xpf">xpf</option>
                                                        <option value="yer">yer</option>
                                                        <option value="zar">zar</option>
                                                        <option value="zmw">zmw</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="os-row">
                                            <div class="os-col-12">
                                                <div class="os-form-group os-form-toggler-group  size-normal"><input
                                                        type="hidden" name="settings[stripe_remove_zip_code]"
                                                        value="off" id="settings_stripe_remove_zip_code">
                                                    <div class="os-toggler off size-normal" data-is-string-value="true"
                                                        data-for="settings_stripe_remove_zip_code">
                                                        <div class="toggler-rail">
                                                            <div class="toggler-pill"></div>
                                                        </div>
                                                    </div>
                                                    <div class="os-toggler-label-w"><label>Do not ask for Zip/Postal
                                                            Code</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="os-row">
                                            <div class="os-col-12">
                                                <div class="copyable-text-block">
                                                    <div class="text-label">
                                                        Webhook URL </div>
                                                    <input type="text" class="os-click-to-copy text-value"
                                                        data-copy-tooltip-position="left"
                                                        value="https://latepoint-demo.com/demo_4217c15f9eb342a2/wp-admin/admin-post.php?action=latepoint_route_call&amp;route_name=payments_stripe__webhook">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="os-section-header">
                        <h3>Other Settings</h3>
                    </div>
                    <div class="white-box">
                        <div class="white-box-header">
                            <div class="os-form-sub-header">
                                <h3>Payment Settings</h3>
                            </div>
                        </div>
                        <div class="white-box-content no-padding">
                            <div class="sub-section-row">
                                <div class="sub-section-label">
                                    <h3>Environment</h3>
                                </div>
                                <div class="sub-section-content">
                                    <div class="os-form-group os-form-select-group os-form-group-transparent"><select
                                            name="settings[payments_environment]" id="settings_payments_environment"
                                            class="os-form-control">
                                            <option value="live" selected="">Live (Production)</option>
                                            <option value="dev">Testing (Development)</option>
                                            <option value="demo">Demo</option>
                                        </select></div>
                                </div>
                            </div>

                            <div class="sub-section-row">
                                <div class="sub-section-label">
                                    <h3>Local Payments</h3>
                                </div>
                                <div class="sub-section-content">
                                    <div class="os-form-group os-form-toggler-group  with-sub-label size-normal"><input
                                            type="hidden" name="settings[enable_payments_local]" value="on"
                                            id="settings_enable_payments_local">
                                        <div class="os-toggler on size-normal" data-is-string-value="true"
                                            data-for="settings_enable_payments_local">
                                            <div class="toggler-rail">
                                                <div class="toggler-pill"></div>
                                            </div>
                                        </div>
                                        <div class="os-toggler-label-w"><label>Allow Paying Locally</label><span>Show "Pay Later" payment option</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="os-form-buttons">
                        <div class="os-form-group">
                            <button type="submit" name="submit" class="btn btn-primary" id="submit">Save Settings</button>
                        </div>
                    </div>
                </form>
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
