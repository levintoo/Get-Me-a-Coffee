<?php

use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\DonorDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PaymentDetails;
use App\Http\Livewire\DonationCredit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/{username}', HomeComponent::class);
Route::post('/donation/amount', [HomeComponent::class, 'doSomething'])->name('amount');
Route::get('/donor-details/{username}', DonorDetails::class);
Route::get('/donation-payment/{username}', PaymentDetails::class);
Route::get('/donation-credit', DonationCredit::class);
Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
