<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use App\Models\Accounts;
use App\Models\Donations;
use App\Models\DonationTransactions;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    }
    public function render()
    {
        return view('livewire.payment-details')->layout('layouts.base');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'inputName' => ['required', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
            'amount' => ['required','numeric'],
            'username' => ['required', 'string', 'max:255'],
            'nameOnCard' => ['required', 'string', 'max:255']
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'inputName' => ['required', 'string', 'max:255'],
            'inputEmail' => ['required', 'string', 'email', 'max:255'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'inputMessage' => ['required', 'string', 'max:255'],
            'amount' => ['required','numeric'],
            'username' => ['required', 'string', 'max:255'],
            'nameOnCard' => ['required', 'string', 'max:255']
        ]);
        $donation = new Donations;
        $user = User::select('userid')->where('username',$request->username)->first();
        $donation->userid = $user->userid;
        $donation->donorid = Helper::IDGenerator(new Donations(),'donorid',4,'DON');
        $donation->name = $request->inputName;
        $donation->email = $request->inputEmail;
        $donation->phone_number = $request->inputPhone;
        $donation->message = $request->inputMessage;
        if($request->name_hidden != '')
        {
            $donation->anonymous = '1';
        }
        else{
            $donation->anonymous = '0';
        }
        $donation->mode_of_payment = 'mpesa';
        $donation->transaction_id = 'AFSDY12KSE';
        $donation->amount = $request->amount;
        $donation->status = '0';
        $donation->donated_at = Carbon::now();
        $donation->save();
        $this->fakeTransaction($donation);
        $this->updateAccount($donation);
        $this->clearSessions();
        return $request;
        // return redirect()->route('donation.credits');
    }
    public function clearSessions()
    {
        session()->forget('amount');
        session()->forget('username');
        session()->forget('inputName');
        session()->forget('inputEmail');
        session()->forget('inputPhone');
        session()->forget('inputMessage');
        session()->forget('name_hidden');
    }
    public function fakeTransaction($donation)
    {
        $transaction = new DonationTransactions();
        $transaction->userid = $donation->userid;
        $transaction->donorid = $donation->donorid;
        $transaction->amount = $donation->amount;
        $transaction->type = 'credit';
        $transaction->transaction_id = 'ASDAGH120';
        $transaction->purpose = 'donation';
        $transaction->status = '0';
        $transaction->save();
    }
    public function updateAccount($donation)
    {
        $user = Accounts::select('amount')->where('userid', $donation->userid)->first();
        $newamount = $user->amount + $donation->amount;
        Accounts::where('userid',$donation->userid)->update([
            'prev_amount' => $user->amount,
            'amount' => $newamount
        ]);
    }

    public function goBack()
    {
        return redirect()->route('donation-payment');
    }
}
