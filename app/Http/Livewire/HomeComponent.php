<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HomeComponent extends Component
{
    public $username;
    public function mount($username)
    {
        $this->username=$username;
    }
    public function render()
    {
        return view('livewire.home-component',['username' => $this->username])->layout('layouts.base');
    }
    public function doSomething(Request $request)
    {
        return redirect()->route('donation-details');
    }
}
