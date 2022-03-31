<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DonorDetails extends Component
{
    public function render()
    {
        return view('livewire.donor-details')->layout('layouts.base');
    }
    public function doSomething(Request $request)
    {
        return redirect()->route('donation-payment');
    }
    public function redirectBack()
    {
        Session::flash('message', 'This is a message!');
        return redirect()->back();
    }
}
