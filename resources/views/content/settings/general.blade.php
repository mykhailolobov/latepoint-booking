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

<link href="{{asset('/assets/css/settings.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card-header mb-4 d-flex">
            <a href="{{ url('/settings/general') }}" class="agent-status-active text-center mx-2 acitive-tab">
                <h4 class="m-0 me-2">General</h4>
            </a>
            <a href="{{ url('/settings/schedule') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Schedule</h4>
            </a>
            <a href="{{ url('/settings/tax') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Tax</h4>
            </a>
            <a href="{{ url('/settings/steps') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Steps</h4>
            </a>
            <a href="{{ url('/settings/payments') }}" class="agent-status-active text-center mx-2">
                <h4 class="m-0 me-2">Payments</h4>
            </a>
            <a href="{{ url('/settings/notifications') }}" class="agent-status-active text-center mx-2">
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
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Appointment Settings</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <label for="settings_default_booking_status" class="form-label">Default status</label>
                            <select name="settings[default_booking_status]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Statuses that block timeslot</label>
                            <select id="selectpickerBasic" class="select2 form-select w-100" data-style="btn-default">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <label for="settings_default_booking_status" class="form-label">Statuses that appear on pending page</label>
                            <select name="settings[default_booking_status]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Statuses hidden on calendar</label>
                            <select id="selectpickerBasic" class="select2 form-select w-100" data-style="btn-default">
                                <option value="approved" selected="">Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="no_show">No Show</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-lg-12 px-3">
                            <label for="selectpickerBasic" class="form-label">Additional Statuses (comma separated)</label>
                            <input type="text" name="settings[additional_booking_statuses]" class="form-control" id="defaultFormControlInput" placeholder="Additional Statuses (comma separated)" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>

                    {{-- Date and time --}}
                    <div class="d-flex mb-3">
                        <div class="col-lg-4 px-3">
                            <label for="settings_default_booking_status" class="form-label">Time system</label>
                            <select name="settings[default_booking_status]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="approved" selected="">12-hour clock</option>
                                <option value="completed">24-hour clock</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="settings_date_format" class="form-label">Statuses hidden on calendar</label>
                            <select id="settings_date_format" name="settings[date_format]" class="select2 form-select w-100" data-style="btn-default">
                                <option value="m/d/Y" selected="">MM/DD/YYYY</option>
                                <option value="m.d.Y">MM.DD.YYYY</option>
                                <option value="d/m/Y">DD/MM/YYYY</option>
                                <option value="d.m.Y">DD.MM.YYYY</option>
                                <option value="Y-m-d">YYYY-MM-DD</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="col-lg-12 px-3">
                            <label for="selectpickerBasic" class="form-label">Selectable intervals</label>
                            <input type="text" name="settings[timeblock_interval]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="30 minutes" />
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="col-lg-6 px-3">
                            <label class="switch">
                                <input type="checkbox" class="switch-input" />
                                <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Show appointment end time</span>
                                <span>Show booking end time during booking process and on summary</span>
                            </label>
                        </div>
                        <div class="col-lg-6 px-3">
                            <label class="switch">
                                <input type="checkbox" class="switch-input" />
                                <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Disable verbose date output</span>
                                <span>Use number instead of name of the month when outputting dates</span>
                            </label>
                        </div>
                    </div>


                </div>
            </div>

            <div class="card mb-4">
                <h5 class="card-header">Restrictions</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    {{-- Time Restrictions --}}
                    <div class="d-flex mb-3">
                        <div class="col-lg-12 px-3">
                            <div class="alert alert-secondary" role="alert">
                                You can set restrictions on earliest/latest dates in the future when your customer can place an appointment. You can either use a relative values like for example "+1 month", "+2 weeks", "+5 days", "+3 hours", "+30 minutes" (entered without quotes), or you can use a fixed date in format YYYY-MM-DD. Leave blank to remove any limitations.
                            </div>
                        </div>

                    </div>
                    <div class="d-flex mb-4">
                        <div class="col-lg-6 px-3">
                            <label for="selectpickerBasic" class="form-label">Earliest Possible Booking</label>
                            <input type="text" name="settings[earliest_possible_booking]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Earliest Possible Booking" />
                        </div>
                        <div class="col-lg-6 px-3">
                            <label for="selectpickerBasic" class="form-label">Latest Possible Booking</label>
                            <input type="text" name="settings[latest_possible_booking]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Latest Possible Booking" />
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="col-lg-12 px-3">
                            <label for="selectpickerBasic" class="form-label">Maximum Number of Future Bookings per Customer</label>
                            <input type="text" name="settings[max_future_bookings_per_customer]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Maximum Number of Future Bookings per Customer" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-4">
                <h5 class="card-header">Currency Settings</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    {{-- Symbol --}}
                    <div class="d-flex mb-4">
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Symbol before the price</label>
                            <input type="text" name="settings[currency_symbol_before]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Symbol before the price" value="$" />
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Symbol after the price</label>
                            <input type="text" name="settings[latest_possible_booking]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Symbol after the price" />
                        </div>
                    </div>
                    
                    {{-- Formatting --}}
                    <div class="d-flex mb-4">
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Thousand Separator</label>
                            <select name="settings[thousand_separator]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="," selected="">Comma (1,000)</option>
                                <option value=".">Dot (1.000)</option>
                                <option value=" ">Space (1 000)</option>
                                <option value="">None (1000)</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Decimal Separator</label>
                            <select name="settings[decimal_separator]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="." selected="">Dot (0.99)</option>
                                <option value=",">Comma (0,99)</option>
                            </select>
                        </div>
                        <div class="col-lg-4 px-3">
                            <label for="selectpickerBasic" class="form-label">Number of Decimals</label>
                            <select name="settings[number_of_decimals]" id="settings_default_booking_status" class="selectpicker w-100">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2" selected="">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Phone Settings</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="d-flex mb-4">
                    <div class="col-lg-4 px-3">
                        <label for="selectpickerBasic" class="form-label">Countries shown in phone field</label>
                        <select name="settings[list_of_phone_countries]" id="settings_list_of_phone_countries" class="select2 form-select w-100" data-style="btn-default">
                            <option value="all" selected="">Show all countries</option>
                            <option value="select">Show selected countries</option>
                        </select>
                    </div>
                    <div class="col-lg-4 px-3">
                        <label for="selectpickerBasic" class="form-label">Default Country (if not auto-detected)</label>
                        <select name="settings[default_phone_country]" id="settings_default_phone_country" class="select2 form-select w-100" data-style="btn-default">
                            <option value="us" selected="">United States</option><option value="af">Afghanistan</option><option value="al">Albania</option><option value="dz">Algeria</option><option value="as">American Samoa</option><option value="ad">Andorra</option><option value="ao">Angola</option><option value="ai">Anguilla</option><option value="ag">Antigua and Barbuda</option><option value="ar">Argentina</option><option value="am">Armenia (Հայաստան)</option><option value="aw">Aruba</option><option value="ac">Ascension Island</option><option value="au">Australia</option><option value="at">Austria (Österreich)</option><option value="az">Azerbaijan (Azərbaycan)</option><option value="bs">Bahamas</option><option value="bh">Bahrain (‫البحرين‬‎)</option><option value="bd">Bangladesh (বাংলাদেশ)</option><option value="bb">Barbados</option><option value="by">Belarus (Беларусь)</option><option value="be">Belgium (België)</option><option value="bz">Belize</option><option value="bj">Benin (Bénin)</option><option value="bm">Bermuda</option><option value="bt">Bhutan (འབྲུག)</option><option value="bo">Bolivia</option><option value="ba">Bosnia and Herzegovina (Босна и Херцеговина)</option><option value="bw">Botswana</option><option value="br">Brazil (Brasil)</option><option value="io">British Indian Ocean Territory</option><option value="vg">British Virgin Islands</option><option value="bn">Brunei</option><option value="bg">Bulgaria (България)</option><option value="bf">Burkina Faso</option><option value="bi">Burundi (Uburundi)</option><option value="kh">Cambodia (កម្ពុជា)</option><option value="cm">Cameroon (Cameroun)</option><option value="ca">Canada</option><option value="cv">Cape Verde (Kabu Verdi)</option><option value="bq">Caribbean Netherlands</option><option value="ky">Cayman Islands</option><option value="cf">Central African Republic (République centrafricaine)</option><option value="td">Chad (Tchad)</option><option value="cl">Chile</option><option value="cn">China (中国)</option><option value="cx">Christmas Island</option><option value="cc">Cocos (Keeling) Islands</option><option value="co">Colombia</option><option value="km">Comoros (‫جزر القمر‬‎)</option><option value="cd">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option><option value="cg">Congo (Republic) (Congo-Brazzaville)</option><option value="ck">Cook Islands</option><option value="cr">Costa Rica</option><option value="ci">Côte d’Ivoire</option><option value="hr">Croatia (Hrvatska)</option><option value="cu">Cuba</option><option value="cw">Curaçao</option><option value="cy">Cyprus (Κύπρος)</option><option value="cz">Czech Republic (Česká republika)</option><option value="dk">Denmark (Danmark)</option><option value="dj">Djibouti</option><option value="dm">Dominica</option><option value="do">Dominican Republic (República Dominicana)</option><option value="ec">Ecuador</option><option value="eg">Egypt (‫مصر‬‎)</option><option value="sv">El Salvador</option><option value="gq">Equatorial Guinea (Guinea Ecuatorial)</option><option value="er">Eritrea</option><option value="ee">Estonia (Eesti)</option><option value="sz">Eswatini</option><option value="et">Ethiopia</option><option value="fk">Falkland Islands (Islas Malvinas)</option><option value="fo">Faroe Islands (Føroyar)</option><option value="fj">Fiji</option><option value="fi">Finland (Suomi)</option><option value="fr">France</option><option value="gf">French Guiana (Guyane française)</option><option value="pf">French Polynesia (Polynésie française)</option><option value="ga">Gabon</option><option value="gm">Gambia</option><option value="ge">Georgia (საქართველო)</option><option value="de">Germany (Deutschland)</option><option value="gh">Ghana (Gaana)</option><option value="gi">Gibraltar</option><option value="gr">Greece (Ελλάδα)</option><option value="gl">Greenland (Kalaallit Nunaat)</option><option value="gd">Grenada</option><option value="gp">Guadeloupe</option><option value="gu">Guam</option><option value="gt">Guatemala</option><option value="gg">Guernsey</option><option value="gn">Guinea (Guinée)</option><option value="gw">Guinea-Bissau (Guiné Bissau)</option><option value="gy">Guyana</option><option value="ht">Haiti</option><option value="hn">Honduras</option><option value="hk">Hong Kong (香港)</option><option value="hu">Hungary (Magyarország)</option><option value="is">Iceland (Ísland)</option><option value="in">India (भारत)</option><option value="id">Indonesia</option><option value="ir">Iran (‫ایران‬‎)</option><option value="iq">Iraq (‫العراق‬‎)</option><option value="ie">Ireland</option><option value="im">Isle of Man</option><option value="il">Israel (‫ישראל‬‎)</option><option value="it">Italy (Italia)</option><option value="jm">Jamaica</option><option value="jp">Japan (日本)</option><option value="je">Jersey</option><option value="jo">Jordan (‫الأردن‬‎)</option><option value="kz">Kazakhstan (Казахстан)</option><option value="ke">Kenya</option><option value="ki">Kiribati</option><option value="xk">Kosovo</option><option value="kw">Kuwait (‫الكويت‬‎)</option><option value="kg">Kyrgyzstan (Кыргызстан)</option><option value="la">Laos (ລາວ)</option><option value="lv">Latvia (Latvija)</option><option value="lb">Lebanon (‫لبنان‬‎)</option><option value="ls">Lesotho</option><option value="lr">Liberia</option><option value="ly">Libya (‫ليبيا‬‎)</option><option value="li">Liechtenstein</option><option value="lt">Lithuania (Lietuva)</option><option value="lu">Luxembourg</option><option value="mo">Macau (澳門)</option><option value="mk">North Macedonia (Македонија)</option><option value="mg">Madagascar (Madagasikara)</option><option value="mw">Malawi</option><option value="my">Malaysia</option><option value="mv">Maldives</option><option value="ml">Mali</option><option value="mt">Malta</option><option value="mh">Marshall Islands</option><option value="mq">Martinique</option><option value="mr">Mauritania (‫موريتانيا‬‎)</option><option value="mu">Mauritius (Moris)</option><option value="yt">Mayotte</option><option value="mx">Mexico (México)</option><option value="fm">Micronesia</option><option value="md">Moldova (Republica Moldova)</option><option value="mc">Monaco</option><option value="mn">Mongolia (Монгол)</option><option value="me">Montenegro (Crna Gora)</option><option value="ms">Montserrat</option><option value="ma">Morocco (‫المغرب‬‎)</option><option value="mz">Mozambique (Moçambique)</option><option value="mm">Myanmar (Burma) (မြန်မာ)</option><option value="na">Namibia (Namibië)</option><option value="nr">Nauru</option><option value="np">Nepal (नेपाल)</option><option value="nl">Netherlands (Nederland)</option><option value="nc">New Caledonia (Nouvelle-Calédonie)</option><option value="nz">New Zealand</option><option value="ni">Nicaragua</option><option value="ne">Niger (Nijar)</option><option value="ng">Nigeria</option><option value="nu">Niue</option><option value="nf">Norfolk Island</option><option value="kp">North Korea (조선 민주주의 인민 공화국)</option><option value="mp">Northern Mariana Islands</option><option value="no">Norway (Norge)</option><option value="om">Oman (‫عُمان‬‎)</option><option value="pk">Pakistan (‫پاکستان‬‎)</option><option value="pw">Palau</option><option value="ps">Palestine (‫فلسطين‬‎)</option><option value="pa">Panama (Panamá)</option><option value="pg">Papua New Guinea</option><option value="py">Paraguay</option><option value="pe">Peru (Perú)</option><option value="ph">Philippines</option><option value="pl">Poland (Polska)</option><option value="pt">Portugal</option><option value="pr">Puerto Rico</option><option value="qa">Qatar (‫قطر‬‎)</option><option value="re">Réunion (La Réunion)</option><option value="ro">Romania (România)</option><option value="ru">Russia (Россия)</option><option value="rw">Rwanda</option><option value="bl">Saint Barthélemy</option><option value="sh">Saint Helena</option><option value="kn">Saint Kitts and Nevis</option><option value="lc">Saint Lucia</option><option value="mf">Saint Martin (Saint-Martin (partie française))</option><option value="pm">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option><option value="vc">Saint Vincent and the Grenadines</option><option value="ws">Samoa</option><option value="sm">San Marino</option><option value="st">São Tomé and Príncipe (São Tomé e Príncipe)</option><option value="sa">Saudi Arabia (‫المملكة العربية السعودية‬‎)</option><option value="sn">Senegal (Sénégal)</option><option value="rs">Serbia (Србија)</option><option value="sc">Seychelles</option><option value="sl">Sierra Leone</option><option value="sg">Singapore</option><option value="sx">Sint Maarten</option><option value="sk">Slovakia (Slovensko)</option><option value="si">Slovenia (Slovenija)</option><option value="sb">Solomon Islands</option><option value="so">Somalia (Soomaaliya)</option><option value="za">South Africa</option><option value="kr">South Korea (대한민국)</option><option value="ss">South Sudan (‫جنوب السودان‬‎)</option><option value="es">Spain (España)</option><option value="lk">Sri Lanka (ශ්‍රී ලංකාව)</option><option value="sd">Sudan (‫السودان‬‎)</option><option value="sr">Suriname</option><option value="sj">Svalbard and Jan Mayen</option><option value="se">Sweden (Sverige)</option><option value="ch">Switzerland (Schweiz)</option><option value="sy">Syria (‫سوريا‬‎)</option><option value="tw">Taiwan (台灣)</option><option value="tj">Tajikistan</option><option value="tz">Tanzania</option><option value="th">Thailand (ไทย)</option><option value="tl">Timor-Leste</option><option value="tg">Togo</option><option value="tk">Tokelau</option><option value="to">Tonga</option><option value="tt">Trinidad and Tobago</option><option value="tn">Tunisia (‫تونس‬‎)</option><option value="tr">Turkey (Türkiye)</option><option value="tm">Turkmenistan</option><option value="tc">Turks and Caicos Islands</option><option value="tv">Tuvalu</option>
                            <option value="vi">U.S. Virgin Islands</option><option value="ug">Uganda</option><option value="ua">Ukraine (Україна)</option>
                            <option value="ae">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
                            <option value="gb">United Kingdom</option><option value="uy">Uruguay</option><option value="uz">Uzbekistan (Oʻzbekiston)</option>
                            <option value="vu">Vanuatu</option><option value="va">Vatican City (Città del Vaticano)</option><option value="ve">Venezuela</option><option value="vn">Vietnam (Việt Nam)</option><option value="wf">Wallis and Futuna (Wallis-et-Futuna)</option><option value="eh">Western Sahara (‫الصحراء الغربية‬‎)</option><option value="ye">Yemen (‫اليمن‬‎)</option><option value="zm">Zambia</option><option value="zw">Zimbabwe</option><option value="ax">Åland Islands</option>
                        </select>
                    </div>
                </div>
                {{-- Validation --}}
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Validate phone typed fields if they are set as required</span>
                            <span>Reject invalid phone for customers and agents if the phone field is set as required</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Format phone number on input</span>
                            <span>Applies formatting on phone fields based on the country selected (not recommended for countries that have multiple NSN lengths)</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Show country dial code next to flag</span>
                            <span>If enabled, will show a country code next to a flag, for example +1 for United States</span>
                        </label>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Phone Settings</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                {{-- Visual Style --}}
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Color Scheme for Booking Form</label>
                        <select name="settings[color_scheme_for_booking_form]" id="settings_color_scheme_for_booking_form" class="selectpicker w-100">
                            <option value="blue" selected="">Blue</option><option value="black">Black</option><option value="teal">Teal</option>
                            <option value="green">Green</option><option value="purple">Purple</option>
                            <option value="red">Red</option><option value="orange">Orange</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Border Style</label>
                        <select name="settings[border_radius]" id="settings_border_radius" class="selectpicker w-100">
                            <option value="rounded">Rounded Corners</option>
                            <option value="flat" selected="">Flat</option>
                        </select>
                    </div>
                </div>

                {{-- Date and Time Picker --}}
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Show Time Slots as</label>
                        <select name="settings[time_pick_style]" id="settings_time_pick_style" class="selectpicker w-100">
                            <option value="timeline">Timeline</option>
                            <option value="timebox" selected="">Time Boxes</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Hide time picker when only one time slot is available</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Hide slot availability count</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Timeslot Availability Logic</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                {{-- Restrictions --}}
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <label class="switch-label">Location can only be used by one agent at a time</label>
                            <span>At any given location, only one agent can be booked at a time</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <label class="switch-label">Agents can only be present in one location at a time</label>
                            <span>If an agent is booked at one location, he will not be able to accept any bookings for the same timeslot at other locations</span>
                        </label>
                    </div>
                </div>

                {{-- Permissions --}}
                <div class="d-flex mb-4">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <label class="switch-label">One agent can perform different services simultaneously</label>
                            <span>Allows an agent to be booked for different services within the same timeslot</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Customer Settings</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                {{-- Rescheduling --}}
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Allow customers reschedule their bookings</span>
                        </label>
                    </div>
                </div>
                {{-- Cancellation --}}
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Allow customers cancel their bookings</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Set restriction on when customer can cancel</span>
                        </label>
                    </div>
                </div>
                {{-- Customer Cabinet --}}
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Shortcode for contents of New Appointment tab</label>
                        <input type="text" name="settings[currency_symbol_before]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Shortcode for contents of New Appointment tab" value="[latepoint_book_form]" />
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Setup Pages</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                {{-- Set Page URLs --}}
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Customer Dashboard Page URL</label>
                        <input type="text" name="settings[currency_symbol_before]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Customer Dashboard Page URL" value="/customer-cabinet/" />
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="col-lg-12 px-3">
                        <label for="selectpickerBasic" class="form-label">Customer Login Page URL</label>
                        <input type="text" name="settings[currency_symbol_before]" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" placeholder="Customer Login Page URL" value="/customer-cabinet/" />
                    </div>
                </div>
            </div>
        </div>

        <div>
            <button class="btn btn-primary add-agent" type="button">Save Settings</button>
        </div>
    </div>
</div>

@endsection
