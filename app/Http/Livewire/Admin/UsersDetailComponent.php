<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class UsersDetailComponent extends Component
{
    public $name;
    public function mount($username)
    {
        $this->name = $username;
    }
    public function render()
    {
        return view('livewire.admin.users-detail-component');
    }
}
