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
    Route::get('/user/editprofile', [Profile::class, 'edit'])->name('user-editprofile');
    Route::post('/user/updateprofile', [Profile::class, 'update'])->name('user-updateprofile');


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
    Route::post('/update_customers', [Customers::class, 'update_customer'])->name('update_customer');
    Route::get('/delete_customer/{id}', [Customers::class, 'delete_customer']);


    // Resources Section
    Route::get('/resource/services', [Services::class, 'index'])->name('resource-services');
    Route::get('/resource/createservices', [Services::class, 'create'])->name('resource-createservices');
    Route::get('/resource/editservices/{id}', [Services::class, 'edit'])->name('resource-editservices');
    Route::post('/resource/storeservice', [Services::class, 'store'])->name('resource-storeservices');
    Route::post('/resource/updateservices', [Services::class, 'update'])->name('resource-updateservices');
    Route::get('/resource/deleteservice/{id}', [Services::class, 'destroy']);



    // Category Section
    Route::get('/resource/categories', [Categories::class, 'index'])->name('resource-categories');
    Route::post('/resource/storecategories', [Categories::class, 'store'])->name('resource-storecategories');
    Route::get('/resource/deletecategories/{id}', [Categories::class, 'destroy']);
    Route::post('/resource/updatecategories/{id}', [Categories::class, 'update'])->name('resource-updatecategories');


    // Service Extra Section
    Route::get('/resource/serviceextras', [Serviceextras::class, 'index'])->name('resource-serviceextras');
    Route::get('/resource/createserviceextras', [Serviceextras::class, 'create'])->name('resource-createserviceextras');
    Route::get('/resource/editserviceextras/{id}', [Serviceextras::class, 'edit'])->name('resource-editserviceextras');
    Route::post('/resource/storeserviceextras', [Serviceextras::class, 'store'])->name('resource-storeserviceextras');
    Route::get('/resource/deleteserviceextras/{id}', [Serviceextras::class, 'destroy']);
    Route::post('/resource/updateserviceextras', [Serviceextras::class, 'update'])->name('resource-updateserviceextras');


    // Resources Section->Agents part
    Route::get('/resource/agents', [Agents::class, 'index'])->name('resource-agents');
    Route::get('/resource/createagents', [Agents::class, 'create'])->name('resource-createagents');
    Route::get('/resource/editagents/{id}', [Agents::class, 'edit'])->name('resource-editagents');
    Route::post('/resource/storeagent', [Agents::class, 'store'])->name('resource-storeagent');
    Route::post('/resource/updateagent/{id}', [Agents::class, 'update'])->name('resource-updateagent');
    

    // Resources Section->Coupons part
    Route::get('/resource/coupons', [Coupons::class, 'index'])->name('resource-coupons');
    Route::post('/resource/updatecoupons/{id}', [Coupons::class, 'update'])->name('resource-updatecoupons');
    Route::post('/resource/storecoupons', [Coupons::class, 'store'])->name('resource-storecoupons');
    Route::get('/resource/deletecoupons/{id}', [Coupons::class, 'destroy']);




    // Resources Section->Locations part
    Route::get('/resource/locations', [Locations::class, 'index'])->name('resource-locations');
    Route::get('/resource/createlocations', [Locations::class, 'create'])->name('resource-createlocations');
    Route::get('/resource/editlocations/{id}', [Locations::class, 'edit'])->name('resource-editlocations');
    Route::post('/resource/storelocations', [Locations::class, 'store'])->name('resource-storelocations');
    Route::post('/resource/updatelocations', [Locations::class, 'update'])->name('resource-updatelocations');


    // Resources Section -> Locations/Categories part
    Route::get('/resource/locationcategories', [LocationCategories::class, 'index'])->name('resource-locationcategories');
    Route::post('/resource/storelocationcategories', [LocationCategories::class, 'store'])->name('resource-storelocationcategories');

  
    // Settings Section -> Settings
    Route::get('/settings/general', [General::class, 'index'])->name('settings-general');
    Route::post('/settings/storegeneral', [General::class, 'store'])->name('settings-storegeneral');
    Route::post('/settings/updategeneral', [General::class, 'update'])->name('settings-updategeneral');
    
    Route::get('/settings/tax', [Tax::class, 'index'])->name('settings-tax');
    Route::post('/settings/storetax', [Tax::class, 'store'])->name('settings-storetax');
    Route::post('/settings/updatetax', [Tax::class, 'update'])->name('settings-updatetax');
    Route::get('/resource/deletetax/{id}', [Tax::class, 'destroy']);

    Route::get('/settings/steps', [Steps::class, 'index'])->name('settings-steps');
    Route::post('/settings/storesteps', [Steps::class, 'store'])->name('settings-storesteps');

    Route::get('/settings/payments', [PaymentSetting::class, 'index'])->name('settings-payments');
    Route::post('/settings/storepayments', [PaymentSetting::class, 'store'])->name('settings-storepayments');


    Route::get('/settings/notifications', [Notifications::class, 'index'])->name('settings-notifications');
    Route::post('/settings/storenotifications', [Notifications::class, 'store'])->name('settings-storenotifications');
    Route::post('/settings/updatenotifications/{id}', [Notifications::class, 'update'])->name('settings-updatenotifications');



    Route::get('/settings/roles', [Roles::class, 'index'])->name('settings-roles');
    Route::post('/settings/storeroles', [Roles::class, 'store'])->name('settings-storeroles');
    Route::post('/settings/updateroles/{id}', [Roles::class, 'update'])->name('settings-updateroles');

    Route::get('/settings/processes', [Processes::class, 'index'])->name('settings-processes');
    Route::post('/settings/storeprocesses', [Processes::class, 'store'])->name('settings-storeprocesses');
    Route::post('/settings/updateprocesses/{id}', [Processes::class, 'update'])->name('settings-updateprocesses');
    Route::get('/resource/deleteprocesses/{id}', [Processes::class, 'destroy']);

    Route::get('/settings/process_jobs', [ScheduledJobs::class, 'index'])->name('settings-process_jobs');
    Route::get('/settings/activities', [ActivityLog::class, 'index'])->name('settings-activities');

    Route::get('/settings/integrations-calendars', [CalendarsIntegration::class, 'index'])->name('settings-integrations-calendars');
    Route::post('/settings/integrations-storecalendars', [CalendarsIntegration::class, 'store'])->name('settings-integrations-storecalendars');
    Route::post('/settings/integrations-updatecalendars/{id}', [CalendarsIntegration::class, 'store'])->name('settings-integrations-updatecalendars');

    Route::get('/settings/integrations-meeting', [Meetings::class, 'index'])->name('settings-integrations-meeting');
    Route::post('/settings/integrations-storemeeting', [Meetings::class, 'store'])->name('settings-integrations-storemeeting');
    Route::post('/settings/integrations-updatemeeting/{id}', [Meetings::class, 'update'])->name('settings-integrations-updatemeeting');


    
    Route::get('/settings/integrations-marketing', [Marketing::class, 'index'])->name('settings-integrations-marketing');
    Route::get('/settings/form-fields', [FormFields::class, 'index'])->name('settings-form-fields');
    Route::get('/settings/schedule', [Schedule::class, 'index'])->name('settings-schedule');
    Route::get('/settings/add-ons', [AddOns::class, 'index'])->name('settings-add-ons');
    Route::get('/settings/system', [System::class, 'index'])->name('settings-system');



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