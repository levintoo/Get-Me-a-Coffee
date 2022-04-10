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
        if (session()->get('username') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 

        if (Session()->get('inputName') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 

        if (Session()->get('inputEmail') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 
        if (Session()->get('inputPhone') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 
        if (Session()->get('inputMessage') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 
        if (Session()->get('name_hidden') === null) {
            session::flash('danger-message','An unexcpected error occured');
            return redirect('/');
        }; 
    }
    public function render()
    {
        return view('livewire.payment-details')->layout('layouts.base');
    }
    public function store(Request $request)
    {
        return $request;
        // return redirect()->route('donation.credits');
    }
    public function goBack(Request $request)
    {
        return redirect()->route('donation-payment');
    }
}
