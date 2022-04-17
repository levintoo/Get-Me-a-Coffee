<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use App\Models\Accounts;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoStepRegisterComponent extends Component
{
    public function mount()
    {
        if(is_null(Auth::user()))
        {
            abort(403);
        }
        if (Auth::user()->status > 0) {
            abort(403);
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'otp' => 'required|numeric',
        ]);
    }
    public function generateOTP()
    {
        $otp = new Helper;
        $newotp =  $otp->generate(Auth::user()->userid, $digits = 4, $validity = 15);
        session()->flash('status', "New otp has been sent $newotp->token");
        return redirect()->back();
    }

    public function validateOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric:4',
        ]);

        if($request->otp =="")
        {
            session()->flash('message','Code cannot be empty');
            return redirect()->back();
        }else{
            $response = $this->validateCode(Auth::user()->userid, $request->otp);
            session()->flash('status',$response->message);
            if($response->status != 'true')
            {
                return redirect()->back();
            }
            else{
                $this->addUser();
                $user = User::where('userid', Auth::user()->userid)->first();
                    $user->status= "1";
                    $user->save();
                return redirect()->route('dashboard');
            }
        }
    }

    public function validateCode($identifier, $token) : object
    {
        $otp = Otp::where('identifier', $identifier)->where('token', $token)->first();

        if ($otp == null) {
            return (object)[
                'status' => false,
                'message' => 'OTP does not exist'
            ];
        } else {
            if ($otp->valid == true) {
                $carbon = new Carbon;
                $now = $carbon->now();
                $validity = $otp->created_at->addMinutes($otp->validity);

                if (strtotime($validity) < strtotime($now)) {
                    $otp->valid = false;
                    $otp->save();

                    return (object)[
                        'status' => false,
                        'message' => 'OTP Expired'
                    ];
                } else {
                    $otp->valid = false;
                    $otp->save();

                    return (object)[
                        'status' => true,
                        'message' => 'OTP is valid'
                    ];
                }
            } else {
                return (object)[
                    'status' => false,
                    'message' => 'OTP is not valid'
                ];
            }
        }
    }

    public function addUser()
    {
        $account = new Accounts;
        $account->userid = Auth::user()->userid;
        $account->amount = 0;
        $account->prev_amount = 0;
        $account->save();
    }

    public function render()
    {
        return view('livewire.two-step-register-component')->layout('layouts.guest');
    }
}
