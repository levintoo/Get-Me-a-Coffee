<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditSettingsComponent extends Component
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

    public function mount()
    {
        $user = User::select('name','username','phone','category','about','country','company','city','email')->where('userid', Auth::user()->userid)->first();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->phone = $user->phone;
        $this->category = $user->category;
        $this->about = $user->about;
        $this->country = $user->country;
        $this->company = $user->company;
        $this->city = $user->city;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.dashboard.edit-settings-component')->layout('layouts.app');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'string|required',
            'username' => 'string|required',
            'company' => 'required|string',
            'country' => 'required|string',
            'category' => 'required|string',
            'city' => 'required|string',
            'about' => 'required|string',
        ]);
    }
    public function updateUserdetails()
    {
        $this->validate([
            'name' => 'string|required',
            'username' => 'string|required',
            'company' => 'required|string',
            'country' => 'required|string',
            'category' => 'required|string',
            'city' => 'required|string',
            'about' => 'required|string',
        ]);
        $user = User::where('userid',Auth::user()->userid)->first();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->phone = $this->phone;
        $user->category = $this->category;
        $user->about = $this->about;
        $user->country = $this->country;
        $user->company = $this->company;
        $user->city = $this->city;
        $user->email = $this->email;
        $user->save();
        session()->flash('message', 'Profile successfully updated');
        return redirect()->route('settings');
    }
}
