<?php

use App\Http\Controllers\tables\Appointments;
use App\Http\Controllers\tables\Payments;
use App\Http\Controllers\tables\Customers;
use App\Http\Controllers\resource\Agents;
use App\Http\Controllers\resource\Coupons;
use App\Http\Controllers\resource\LocationCategories;
use App\Http\Controllers\resource\Locations;
use App\Http\Controllers\resource\Services;
use App\Http\Controllers\resource\Categories;
use App\Http\Controllers\resource\Serviceextras;

use Illuminate\Contracts\Database\Eloquent\DeviatesCastableAttributes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;

use App\Http\Controllers\HomePage;
use App\Http\Controllers\apps\Chat;
use App\Http\Controllers\apps\Email;
use App\Http\Controllers\apps\Calendar;

use App\Http\Controllers\Settings\General;


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
    // Main Page Route
    Route::get('/dashboard', [HomePage::class, 'index'])->name('dashboard');

    Route::get('/app/chat', [Chat::class, 'index'])->name('app-chat');
    Route::get('/app/email', [Email::class, 'index'])->name('app-email');
    Route::get('/app/calendar', [Calendar::class, 'index'])->name('app-calendar');
    Route::get('/app/tables-appointments', [Appointments::class, 'index'])->name('app-appointments');
    Route::get('/app/tables-payments', [Payments::class, 'index'])->name('app-payments');
    Route::get('/app/tables-customers', [Customers::class, 'index'])->name('app-customers');

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

    // Resources Section->Coupons part
    Route::get('/resource/coupons', [Coupons::class, 'index'])->name('resource-coupons');


    // Resources Section->Locations part
    Route::get('/resource/locations', [Locations::class, 'index'])->name('resource-locations');
    Route::get('/resource/createlocations', [Locations::class, 'create'])->name('resource-createlocations');
    Route::get('/resource/editlocations/{id}', [Locations::class, 'edit'])->name('resource-editlocations');


    // Resources Section -> Locations/Categories part
    Route::get('/resource/locationcategories', [LocationCategories::class, 'index'])->name('resource-locationcategories');

  
    // Settings Section -> Settings
    Route::get('/settings/general', [General::class, 'index'])->name('settings-general');
});

require __DIR__ . '/auth.php';