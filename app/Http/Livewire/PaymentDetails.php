<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PaymentDetails extends Component
{
    public function mount()
    {
        if (session()->get('username') === null || session()->get('username') === "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };

        if (Session()->get('inputName') === null || Session()->get('inputName') === "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };

        if (Session()->get('inputEmail') === null || Session()->get('inputEmail') ===  "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };
        if (Session()->get('inputPhone') === null || Session()->get('inputPhone') === "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };
        if (Session()->get('inputMessage') === null || Session()->get('inputMessage') === "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };
        if (Session()->get('name_hidden') === null || Session()->get('name_hidden') === "") {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        };
    }
    public function render()
    {
        return view('livewire.payment-details')->layout('layouts.base');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name_hidden' => ['string', 'max:255'],
            'inputName' => ['required', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
            'amount' => ['required','numeric','max:255'],
            'username' => ['required', 'string', 'max:255'],
            'nameOnCard' => ['required', 'string', 'max:255']
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_hidden' => 'string',
            'inputName' => ['required', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
            'amount' => ['required','numeric','max:255'],
            'username' => ['required', 'string', 'max:255'],
            'nameOnCard' => ['required', 'string', 'max:255']
        ]);
        return $request;
        // return redirect()->route('donation.credits');
    }
    public function goBack(Request $request)
    {
        return redirect()->route('donation-payment');
    }
}
