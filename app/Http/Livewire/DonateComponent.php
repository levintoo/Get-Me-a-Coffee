<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DonateComponent extends Component
{
    public $search;
    public $name;
    public function mount()
    {

    }
    public function search()
    {
        session::flash('message','results found');
    }
    public function render()
    {
        if(is_null($this->name))
        {
            $users = User::where('status','=','1')->inRandomOrder()->limit(3)->get();
        }else{
            $users = User::where('status','=','1')->where ( 'username', 'LIKE', '%' . $this->name . '%' )->orWhere ( 'name', 'LIKE', '%' . $this->name . '%' )->get();
        }
        return view('livewire.donate-component',['users'=>$users])->layout('layouts.base');
    }
}
