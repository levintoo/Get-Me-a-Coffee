<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $pounds;
    public $username;
    public function mount()
    {
        $this->pounds = 100;
    }

    public function render()
    {
        return view('livewire.home-component', ['pounds' => $this->pounds,'username'  => $this->username])->layout('layouts.base');
    }
    public function doSomething()
    {
        session()->flash('message', "value reduced to 5");
        $this->pounds = 5;
    }
}
