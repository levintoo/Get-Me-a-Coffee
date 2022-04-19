<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class HomeComponent extends Component
{
    public $username;
    public function mount($username)
    {
        $this->username = $username;
        $user = User::where('username', $this->username)->where('status', '1')->first();
        if ($user === null) {
            session::flash('danger-message','The user does not exist or is not verified yet');
            return redirect('/');
        }
    }

    public function updated($fields)
    {
            $this->validateOnly($fields, [
                'other_amount' => 'numeric',
                'pounds' => 'numeric'
            ]);
    }

    public function doSomething(Request $request )
    {
        if($request->other_amount != "")
        {
            $request->validate([
                'other_amount' => ['required','numeric','max:255'],
                'username' => ['required', 'string', 'max:255']
            ]);
        }else{
            $request->validate([
                'pounds' => ['required','numeric','max:255'],
                'username' => ['required', 'string', 'max:255']
            ]);
        }

        if($request->other_amount != "")
        {
            $amount = $request->other_amount;
            session::put('amount',$amount);
        }else{
            $amount = $request->pounds;
            session::put('amount',$amount);
        }
        Session::put('username',$request->username);
        return redirect()->route('donation-details');
    }

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
