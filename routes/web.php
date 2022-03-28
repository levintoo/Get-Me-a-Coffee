<?php

use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\DonorDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PaymentDetails;
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
Route::get('/dashboard/{username}', DashboardComponent::class)->name('dashboard');
