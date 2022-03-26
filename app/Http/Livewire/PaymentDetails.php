<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentDetails extends Component
{
    public function render()
    {
        return view('livewire.payment-details')->layout('layouts.base');
    }
}
