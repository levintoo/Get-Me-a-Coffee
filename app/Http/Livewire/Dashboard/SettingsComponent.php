<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SettingsComponent extends Component
{
    public $name;
    public $username;
    public $phone;
    public $category;
    public $about;
    public $country;
    public $company;
    public $city;
    public $email;
    public $user;
    public $photo;

    public function mount()
    {
        $user = User::select('name','username','phone','category','about','country','company','city','email','photo')->where('userid', Auth::user()->userid)->first();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->phone = $user->phone;
        $this->category = $user->category;
        $this->about = $user->about;
        $this->country = $user->country;
        $this->company = $user->company;
        $this->city = $user->city;
        $this->email = $user->email;
        if(is_null($user->photo) || $user->photo === ""){
            $this->photo = 'rand.jpg';
        }else{
            $this->photo = $user->photo;
        }
    }

    public function render()
    {
        return view('livewire.dashboard.settings-component')->layout('layouts.app');
    }

    public function openEdit()
    {
        return redirect()->route('settings.edit');
    }
}
