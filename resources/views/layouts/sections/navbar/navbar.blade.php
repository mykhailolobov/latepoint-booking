@php
$containerNav = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' :
  'container-fluid';
$navbarDetached = ($navbarDetached ?? '');

@endphp

<!-- Navbar -->
@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')
<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme"
    id="layout-navbar">
    @endif
    @if(isset($navbarDetached) && $navbarDetached == '')
    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="{{$containerNav}}">
            @endif

            <!--  Brand demo (display only for navbar-full and hide on below xl) -->
            @if(isset($navbarFull))
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                <a href="{{url('/')}}" class="app-brand-link gap-2">
                    <span
                        class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
                    <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
                </a>

                @if(isset($menuHorizontal))
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
                @endif
            </div>
            @endif

            <!-- ! Not required for layout-without-menu -->
            @if(!isset($navbarHideToggle))
            <div
                class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ? ' d-xl-none ' : '' }}">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>
            @endif

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                @if(!isset($menuHorizontal))
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item navbar-search-wrapper mb-0">
                        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                            <i class="bx bx-search bx-sm"></i>
                            <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                        </a>
                    </div>
                </div>
                <!-- /Search -->
                @endif

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    @if(isset($menuHorizontal))
                    <!-- Search -->
                    <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                        <a class="nav-link search-toggler" href="javascript:void(0);">
                            <i class="bx bx-search bx-sm"></i>
                        </a>
                    </li>
                    <!-- /Search -->
                    @endif

                    <!-- Language -->
                    <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="{{url('app/chat')}}">
                            <i class='bx bx-chat bx-sm'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                    href="{{url('lang/en')}}" data-language="en" data-text-direction="ltr">
                                    <span class="align-middle">English</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                                    href="{{url('lang/fr')}}" data-language="fr" data-text-direction="ltr">
                                    <span class="align-middle">French</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() === 'ar' ? 'active' : '' }}"
                                    href="{{url('lang/ar')}}" data-language="ar" data-text-direction="rtl">
                                    <span class="align-middle">Arabic</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() === 'de' ? 'active' : '' }}"
                                    href="{{url('lang/de')}}" data-language="de" data-text-direction="ltr">
                                    <span class="align-middle">German</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ Language -->

                    <!-- Quick links  -->
                    <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class='bx bx-grid-alt bx-sm'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="dropdown-menu-header border-bottom">
                                <div class="dropdown-header d-flex align-items-center py-3">
                                    <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                    <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                            class="bx bx-sm bx-plus-circle"></i></a>
                                </div>
                            </div>
                            <div class="dropdown-shortcuts-list scrollable-container">
                                <div class="row row-bordered overflow-visible g-0">
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-calendar fs-4"></i>
                                        </span>
                                        <a href="{{url('app/calendar')}}" class="stretched-link">Calendar</a>
                                        <small class="text-muted mb-0">Appointments</small>
                                    </div>
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-food-menu fs-4"></i>
                                        </span>
                                        <a href="{{url('app/invoice/list')}}" class="stretched-link">Invoice App</a>
                                        <small class="text-muted mb-0">Manage Accounts</small>
                                    </div>
                                </div>
                                <div class="row row-bordered overflow-visible g-0">
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-user fs-4"></i>
                                        </span>
                                        <a href="{{url('app/user/list')}}" class="stretched-link">User App</a>
                                        <small class="text-muted mb-0">Manage Users</small>
                                    </div>
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-check-shield fs-4"></i>
                                        </span>
                                        <a href="{{url('app/access-roles')}}" class="stretched-link">Role Management</a>
                                        <small class="text-muted mb-0">Permission</small>
                                    </div>
                                </div>
                                <div class="row row-bordered overflow-visible g-0">
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                        </span>
                                        <a href="{{url('/')}}" class="stretched-link">Dashboard</a>
                                        <small class="text-muted mb-0">User Profile</small>
                                    </div>
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-cog fs-4"></i>
                                        </span>
                                        <a href="{{url('pages/account-settings-account')}}"
                                            class="stretched-link">Setting</a>
                                        <small class="text-muted mb-0">Account Settings</small>
                                    </div>
                                </div>
                                <div class="row row-bordered overflow-visible g-0">
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-help-circle fs-4"></i>
                                        </span>
                                        <a href="{{url('pages/faq')}}" class="stretched-link">FAQs</a>
                                        <small class="text-muted mb-0">FAQs & Articles</small>
                                    </div>
                                    <div class="dropdown-shortcuts-item col">
                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                            <i class="bx bx-window-open fs-4"></i>
                                        </span>
                                        <a href="{{url('modal-examples')}}" class="stretched-link">Modals</a>
                                        <small class="text-muted mb-0">Useful Popups</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Quick links -->

                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="{{url('app/email')}}">
                            <i class='bx bxs-inbox bx-sm'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <!-- <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <!--/ Style Switcher -->

                    <!-- Notification -->
                    <button class="btn btn-primary d-flex send-msg-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
                        <i class="bx bx-plus me-md-1 me-0"></i>
                        <span class="align-middle d-md-inline-block d-none">New Booking</span>
                    </button>
                    <!--/ Notification -->

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png') }}"
                                    alt class="w-px-40 h-auto rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ Route::has('profile.show') ? route('profile.show') : url('pages/profile-user') }}">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png') }}"
                                                    alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block">
                                                @if (Auth::check())
                                                    {{ Auth::user()->name }}
                                                @else
                                                    John Doe
                                                @endif
                                            </span>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <!-- <li>
                                <a class="dropdown-item"
                                    href="{{ Route::has('profile.show') ? route('profile.show') : url('pages/profile-user') }}">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li> -->
                            @if (Auth::check() && Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <li>
                                <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                                    <i class='bx bx-key me-2'></i>
                                    <span class="align-middle">API Tokens</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{url('pages/account-settings-billing')}}">
                                    <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 bx bx-cog me-2"></i>
                                        <span class="flex-grow-1 align-middle">Settings</span>
                                        <!-- <span
                                            class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                    </span> -->
                                </a>
                            </li>
                            @if (Auth::User() && Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <h6 class="dropdown-header">Manage Team</h6>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)' }}">
                                    <i class='bx bx-cog me-2'></i>
                                    <span class="align-middle">Team Settings</span>
                                </a>
                            </li>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <li>
                                <a class="dropdown-item" href="{{ route('teams.create') }}">
                                    <i class='bx bx-user me-2'></i>
                                    <span class="align-middle">Create New Team</span>
                                </a>
                            </li>
                            @endcan
                            @if (Auth::user()->allTeams()->count() > 1)
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <h6 class="dropdown-header">Switch Teams</h6>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            @endif
                            @if (Auth::user())
                            @foreach (Auth::user()->allTeams() as $team)
                            {{-- Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. --}}

                            {{-- <x-switchable-team :team="$team" /> --}}
                            @endforeach
                            @endif
                            @endif
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            @if (Auth::check())
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class='bx bx-power-off me-2'></i>
                                    <span class="align-middle">Logout</span>
                                </a>
                            </li>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            @else
                            <li>
                                <a class="dropdown-item"
                                    href="{{ Route::has('login') ? route('login') : url('auth/login-basic') }}">
                                    <i class='bx bx-log-in me-2'></i>
                                    <span class="align-middle">Login</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>

            <!-- Search Small Screens -->
            <div
                class="navbar-search-wrapper search-input-wrapper {{ isset($menuHorizontal) ? $containerNav : '' }} d-none">
                <input type="text"
                    class="form-control search-input {{ isset($menuHorizontal) ? '' : $containerNav }} border-0"
                    placeholder="Search..." aria-label="Search...">
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
            </div>

            @if(isset($navbarDetached) && $navbarDetached == '')
        </div>
        @endif
    </nav>
    <!-- / Navbar -->

<!-- Start the New Booking Modal -->
<div class="col-lg-3 col-md-6">
    <div class="mt-3">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasEndLabel" class="offcanvas-title">New Appointment</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body mx-0 flex-grow-0">
                <div class="col-lg-12 mb-3">
                    <select id="selectpickerGroups" class="selectpicker w-100" data-style="btn-default">
                        <optgroup label="General Dentistry">
                            <option>Tooth Whitening</option>
                            <option>Group Booking</option>
                            <option>Gum Decease</option>
                        </optgroup>
                        <optgroup label="Cosmetic Dentistry">
                            <option>Invisilign Braces</option>
                            <option>Root Canal Therapy</option>
                            <option>Money Heist</option>
                        </optgroup>
                        <optgroup label="Implants Dentistry">
                            <option>Porcelain Crown</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="selectpickerBasic" class="form-label">Service Extras</label>
                    <div class="select2-primary">
                        <select id="select2Primary" class="select2 form-select" multiple>
                            <option value="1" selected>Teeth Whitening</option>
                            <option value="2" selected>Hair Wash</option>
                            <option value="3">Recovery Mask</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 d-flex mb-3">
                    <div class="col-lg-6">
                        <label for="selectpickerBasic" class="form-label">Agent</label>
                        <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                            <option>John Mayers</option>
                            <option>Kim Collins</option>
                            <option>Ben Stones</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="selectpickerBasic" class="form-label">Status</label>
                        <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                            <option>Approved</option>
                            <option>Pending Approval</option>
                            <option>Cancelled</option>
                            <option>Finished</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="selectpickerBasic" class="form-label">Start Date</label>
                    <input type="text" class="form-control" placeholder="mm/dd/YYYY" />
                </div>
                <div class="col-lg-12 d-flex mb-3">
                    <div class="col-lg-6">
                        <div class="start_time">
                            <label for="flatpickr-time" class="form-label">Start Time</label>
                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="finish_time">
                            <label for="flatpickr-time" class="form-label">End Time</label>
                            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time-finish" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex mb-3">
                    <div class="col-lg-6">
                        <div class="buffer_before">
                            <label for="flatpickr-time" class="form-label">Buffer Before</label>
                            <input type="text" class="form-control" placeholder="0 minutes" id="flatpickr-time" />
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="buffer_after">
                            <label for="flatpickr-time" class="form-label">Buffer After</label>
                            <input type="text" class="form-control" placeholder="0 minutes" id="flatpickr-time-finish" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex mb-3">
                    <div class="col-lg-12">
                        <div class="comment_left_by_customer">
                            <label for="flatpickr-time" class="form-label">Comment left by customer</label>
                            <textarea placeholder="" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex mb-3">
                    <div class="col-lg-12">
                        <div class="doc_upload">
                            <label for="flatpickr-time" class="form-label">Doc</label>
                            <input type="file" class="form-control" id="flatpickr-time-finish" />
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                <button type="button" class="btn btn-label-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End the New Booking Modal -->