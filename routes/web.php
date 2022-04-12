<?php

use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\DonationDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\IndexPageComponent;
use App\Http\Livewire\PaymentDetails;
use App\Http\Livewire\DonationCredit;
use App\Http\Livewire\TwoStepRegisterComponent;
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
Route::get('/register/step-two', TwoStepRegisterComponent::class)->name('resgister-step-two');
Route::post('/register/otp-generate', [TwoStepRegisterComponent::class , 'generateOTP'])->name('generateOTP');
Route::post('/register/otp-validate', [TwoStepRegisterComponent::class , 'validateOTP'])->name('validateOTP');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::middleware(['registration_complete'])->group(function () {

        Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
            return view('dashboard');
        })->name('dashboard2');

    });

});

Route::get('/{username}', HomeComponent::class);
