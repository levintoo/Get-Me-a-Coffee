<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoStepRegisterComponent extends Component
{
    public function mount()
    {
        if (Auth::user()->status > 0) {
            abort(403);
        }
    }

    public function render()
    {
        return view('livewire.two-step-register-component')->layout('layouts.guest');
    }

    public function validateOTP(Request $request)
    {
        return $request;
        // return redirect()->route('donation.credits');
    }
}
