<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class IndexPageComponent extends Component
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
            $users = "";
        }else{
            $users = User::where ( 'username', 'LIKE', '%' . $this->name . '%' )->orWhere ( 'name', 'LIKE', '%' . $this->name . '%' )->get();
        }
        return view('livewire.index-page-component',['users'=>$users])->layout('layouts.base');
    }
}
