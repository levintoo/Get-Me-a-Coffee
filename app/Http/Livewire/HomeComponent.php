<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

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
        }else{
            $amount = $request->pounds;
        }
        return redirect()->route('donation-details',['amount' => $amount,'username' => $request->username]);
    }

    public function render()
    {
        if($this->username = "dashboard"){
            return view('livewire.dashboard.dashboard-component')->layout('layouts.app');
        }
        return view('livewire.home-component',['username' => $this->username])->layout('layouts.base');
    }
}
