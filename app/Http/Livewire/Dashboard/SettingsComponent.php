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
        $this->name = $this->checkifempty($user->name);
        $this->username = $this->checkifempty($user->username);
        $this->phone = $this->checkifempty($user->phone);
        $this->category = $this->checkifempty($user->category);
        $this->about = $this->checkifempty($user->about);
        $this->country = $this->checkifempty($user->country);
        $this->city = $this->checkifempty($user->city);
        $this->email = $this->checkifempty($user->email);
        $this->company = $this->checkifempty($user->company);

        if(is_null($user->photo) || $user->photo === ""){
            $this->photo = 'rand.jpg';
        }else{
            $file = public_path('assets/images/users'.'/'.$user->photo);
            if( file_exists($file)){
                $this->photo = $user->photo;
            }else{
            $this->photo = 'rand.jpg';
            }
        }
    }

    public function checkifempty($value)
    {
        $value ?  : $value = "---";
        return $value;
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
