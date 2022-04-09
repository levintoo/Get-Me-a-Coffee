<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class HomeComponent extends Component
{
    public $username;
    public function mount($username)
    {
        $this->username = $username;
    }
    public function doSomething(Request $request )
    {
        if($request->other_amount != "")
        {
            $amount = $request->other_amount;
            session::put('amount',$amount);
        }else{
            $amount = $request->pounds;
            session::put('amount',$amount);
        }
        Session::put('username',$request->username);
        return redirect()->route('donation-details');
    }

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}