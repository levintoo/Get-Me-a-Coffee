<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminHomeComponent extends Component
{
    public $user;
    public $usernamedetail;
    public function mount()
    {
        $user = User::select('name','username','category','email','photo','status','utype')->orderBy('created_at','DESC')->get();
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.admin.admin-home-component');
    }
}
