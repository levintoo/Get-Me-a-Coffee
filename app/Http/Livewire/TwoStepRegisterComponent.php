<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use App\Models\User;
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
        $newotp =  $otp->generate(Auth::user()->userid, $digits = 4, $validity = 30);
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
            $response = Helper::validateotp(Auth::user()->userid, $request->otp);
            session()->flash('status',$response->message);
            if($response->status != 'true')
            {
                return redirect()->back();
            }
            else{
                User::where('userid', Auth::user()->userid)->first()->update([
                    'status' => "1",
                ]);
//                return Auth::user()->userid;
                return redirect()->route('dashboard');
            }
        }
    }
    public function render()
    {
        return view('livewire.two-step-register-component')->layout('layouts.guest');
    }
}
