<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class PaymentDetails extends Component
{
    public function render()
    {
        return view('livewire.payment-details')->layout('layouts.base');
    }
    public function doSomething(Request $request)
    {
        return redirect()->route('donation.credits');
    }
    public function goBack(Request $request)
    {
        return redirect()->route('donation-payment');
    }
}
