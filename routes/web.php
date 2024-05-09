<?php

use App\Http\Controllers\tables\Appointments;
use App\Http\Controllers\tables\Payments;
use App\Http\Controllers\tables\Customers;
use App\Http\Controllers\resource\Agents;
use App\Http\Controllers\resource\Coupons;
use App\Http\Controllers\resource\LocationCategories;
use App\Http\Controllers\resource\Locations;

use Illuminate\Contracts\Database\Eloquent\DeviatesCastableAttributes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\apps\Chat;
use App\Http\Controllers\apps\Email;
use App\Http\Controllers\apps\Calendar;

// use App\Http\Controllers\tables\DatatableBasic;



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

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

Route::get('/app/chat', [Chat::class, 'index'])->name('app-chat');
Route::get('/app/email', [Email::class, 'index'])->name('app-email');
Route::get('/app/calendar', [Calendar::class, 'index'])->name('app-calendar');
Route::get('/app/tables-appointments', [Appointments::class, 'index'])->name('app-appointments');
Route::get('/app/tables-payments', [Payments::class, 'index'])->name('app-payments');
Route::get('/app/tables-customers', [Customers::class, 'index'])->name('app-customers');

// Resources Section
Route::get('/resource/services', [Services::class, 'index'])->name('resource-services');
Route::get('/resource/categories', [Categories::class, 'index'])->name('resource-categories');

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