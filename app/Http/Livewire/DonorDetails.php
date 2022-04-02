<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DonorDetails extends Component
{
    public $username;
    public $amount;
    public function mount($username, $amount)
    {
        $this->username = $username;
        $this->amount = $amount;
    }

    public function render()
    {
        return view('livewire.donor-details',['username' => $this->username,'amount' => $this->amount])->layout('layouts.base');
    }
    public function doSomething(Request $request)
    {
        return $request;
        return redirect()->route('donation-payment');
    }
    public function redirectBack()
    {
        Session::flash('message', 'This is a message!');
        return redirect()->back();
    }
}
