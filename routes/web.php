<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Language\LanguageController;
use App\Http\Controllers\Apps\Chat;
use App\Http\Controllers\Apps\Email;
use App\Http\Controllers\Settings\Profile;

use App\Http\Controllers\Pages\Dashboard;
use App\Http\Controllers\Pages\Calendar;
use App\Http\Controllers\Pages\Appointments;
use App\Http\Controllers\Pages\Payments;
use App\Http\Controllers\Pages\Customers;

use App\Http\Controllers\Resource\Agents;
use App\Http\Controllers\Resource\Coupons;
use App\Http\Controllers\Resource\LocationCategories;
use App\Http\Controllers\Resource\Locations;
use App\Http\Controllers\Resource\Services;
use App\Http\Controllers\Resource\Categories;
use App\Http\Controllers\Resource\Serviceextras;

use App\Http\Controllers\Settings\AddOns;
use App\Http\Controllers\Settings\General;
use App\Http\Controllers\Settings\Notifications;
use App\Http\Controllers\Settings\Payments as PaymentSetting;
use App\Http\Controllers\Settings\Roles;
use App\Http\Controllers\Settings\Schedule;
use App\Http\Controllers\Settings\Steps;
use App\Http\Controllers\Settings\System;
use App\Http\Controllers\Settings\Tax;
use App\Http\Controllers\Settings\Integrations\Calendars as CalendarsIntegration;
use App\Http\Controllers\Settings\Integrations\Marketing;
use App\Http\Controllers\Settings\Integrations\Meetings;
use App\Http\Controllers\Settings\Processes\ActivityLog;
use App\Http\Controllers\Settings\Processes\Processes;
use App\Http\Controllers\Settings\Processes\ScheduledJobs;

use App\Http\Controllers\Settings\FormFields;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect()->route('login');
});

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::middleware('auth')->group(function () {
    
    Route::get('/app/chat', [Chat::class, 'index'])->name('app-chat');
    Route::get('/app/email', [Email::class, 'index'])->name('app-email');
    Route::get('/user/profile', [Profile::class, 'index'])->name('user-profile');

    // Main Page Route
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/calendar', [Calendar::class, 'index'])->name('app-calendar');
    Route::get('/appointments', [Appointments::class, 'index'])->name('app-appointments');
    Route::get('/payments', [Payments::class, 'index'])->name('app-payments');
    Route::get('/customers', [Customers::class, 'index'])->name('app-customers');

    // Customer Section
    Route::get('/customers/new', [Customers::class, 'add']);
    Route::get('/customers/list', [Customers::class, 'list']);
    Route::post('/add_customer', [Customers::class, 'add_customer'])->name('add_customer');
    Route::get('/edit_customer/{id}', [Customers::class, 'edit_customer'])->name('edit_customer');
    Route::post('/customers', [Customers::class, 'update_customer'])->name('update_customer');
    Route::get('/delete_customer/{id}', [Customers::class, 'delete_customer']);
    Route::get('/customers/search', [Customers::class, 'search_customer'])->name('search_customer');


    // Resources Section
    Route::get('/resource/services', [Services::class, 'index'])->name('resource-services');
    Route::get('/resource/createservices', [Services::class, 'create'])->name('resource-createservices');
    Route::get('/resource/editservices/{id}', [Services::class, 'edit'])->name('resource-editservices');

    // Category Section
    Route::get('/resource/categories', [Categories::class, 'index'])->name('resource-categories');

    // Service Extra Section
    Route::get('/resource/serviceextras', [Serviceextras::class, 'index'])->name('resource-serviceextras');
    Route::get('/resource/createserviceextras', [Serviceextras::class, 'create'])->name('resource-createserviceextras');
    Route::get('/resource/editserviceextras/{id}', [Serviceextras::class, 'edit'])->name('resource-editserviceextras');


    // Resources Section->Agents part
    Route::get('/resource/agents', [Agents::class, 'index'])->name('resource-agents');
    Route::get('/resource/createagents', [Agents::class, 'create'])->name('resource-createagents');
    Route::get('/resource/editagents/{id}', [Agents::class, 'edit'])->name('resource-editagents');
    Route::post('/resource/storeagent', [Agents::class, 'store'])->name('resource-storeagent');
    Route::post('/resource/updateagent', [Agents::class, 'update'])->name('resource-updateagent');
    

    // Resources Section->Coupons part
    Route::get('/resource/coupons', [Coupons::class, 'index'])->name('resource-coupons');


    // Resources Section->Locations part
    Route::get('/resource/locations', [Locations::class, 'index'])->name('resource-locations');
    Route::get('/resource/createlocations', [Locations::class, 'create'])->name('resource-createlocations');
    Route::get('/resource/editlocations/{id}', [Locations::class, 'edit'])->name('resource-editlocations');


    // Resources Section -> Locations/Categories part
    Route::get('/resource/locationcategories', [LocationCategories::class, 'index'])->name('resource-locationcategories');

  
    // Settings Section -> Settings
    Route::get('/settings/add-ons', [AddOns::class, 'index'])->name('settings-add-ons');

    Route::get('/settings/general', [General::class, 'index'])->name('settings-general');
    Route::get('/settings/schedule', [Schedule::class, 'index'])->name('settings-schedule');
    Route::get('/settings/tax', [Tax::class, 'index'])->name('settings-tax');
    Route::get('/settings/steps', [Steps::class, 'index'])->name('settings-steps');
    Route::get('/settings/payments', [PaymentSetting::class, 'index'])->name('settings-payments');
    Route::get('/settings/notifications', [Notifications::class, 'index'])->name('settings-notifications');
    Route::get('/settings/roles', [Roles::class, 'index'])->name('settings-roles');
    Route::get('/settings/system', [System::class, 'index'])->name('settings-system');
    Route::get('/settings/processes', [Processes::class, 'index'])->name('settings-processes');
    Route::get('/settings/process_jobs', [ScheduledJobs::class, 'index'])->name('settings-process_jobs');
    Route::get('/settings/activities', [ActivityLog::class, 'index'])->name('settings-activities');
    Route::get('/settings/integrations-calendars', [CalendarsIntegration::class, 'index'])->name('settings-integrations-calendars');
    Route::get('/settings/integrations-meeting', [Marketing::class, 'index'])->name('settings-integrations-meeting');
    Route::get('/settings/integrations-marketing', [Meetings::class, 'index'])->name('settings-integrations-marketing');
    Route::get('/settings/form-fields', [FormFields::class, 'index'])->name('settings-form-fields');
});

require __DIR__ . '/auth.php';

// --------------------------- FOR TEST ----------------------------- //
Route::get('/run-artisan', function () {
    $exitCode = Artisan::call(request()->get('command'));
    $output = Artisan::output();

    return response()->json([
        'exitCode' => $exitCode,
        'output' => $output
    ]);
});