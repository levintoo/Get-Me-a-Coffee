<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DonationDetails extends Component
{
    public function mount()
    {
        $this->username = session()->get('username');
        $this->username != "" ? "" : redirect('/');
        $this->amount = session()->get('amount');
        $this->amount != "" ? "" : redirect('/');
    }
    public function render()
    {
        return view('livewire.donation-details')->layout('layouts.base');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name_hidden' => 'string',
            'inputName' => ['required', 'unique:users', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_hidden' => 'string',
            'inputName' => ['required', 'unique:users', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
        ]);
        // return $request;
        Session::put('inputName', $request->inputName);
        Session::put('inputEmail', $request->inputEmail);
        Session::put('inputPhone', $request->inputPhone);
        Session::put('inputMessage', $request->inputMessage);
        $request->name_hidden != "" ? Session::put('name_hidden', $request->name_hidden) : Session::put('name_hidden', "");
        return redirect()->route('donation-payment');
    }
    public function redirectBack()
    {
        Session::flash('message', 'This is a message!');
        return redirect()->back();
    }
}
