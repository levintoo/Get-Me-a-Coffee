<?php

use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\DonationDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\IndexPageComponent;
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
Route::get('/', IndexPageComponent::class);
Route::post('/donation/amount', [HomeComponent::class, 'doSomething'])->name('amount');
Route::get('/donation/details', DonationDetails::class)->name('donation-details');
Route::post('/donation/details/store', [DonationDetails::class, 'store'])->name('donation-details.submit');
Route::get('/donation/payment', PaymentDetails::class)->name('donation-payment');
Route::post('/donation/payment/store', [PaymentDetails::class, 'store'])->name('donation-payment.store');
Route::post('/donation/payment/back', [PaymentDetails::class, 'goBack'])->name('donation-payment.back');
Route::get('/donation/credit', DonationCredit::class)->name('donation.credits');
Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
Route::get('/{username}', HomeComponent::class);