<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Accounts;
use App\Models\DonationTransactions;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WalletComponent extends Component
{
    public function render()
    {        $account = Accounts::where('userid',Auth::user()->userid)->first();
        if ($account != "")
        {
//            $account = "something";
        }else{
            $account = "nothing";
        }
        $user = User::where('userid',Auth::user()->userid)->first();
        $today = DonationTransactions::whereDay('created_at','=',Carbon::now()->day)->where('userid','=',Auth::user()->userid)->get();
        $todaysearning = 0;
        foreach ($today as $todayamount) {
            $todaysearning = $todaysearning + $todayamount->amount;
        }
        return view('livewire.dashboard.wallet-component',['account'=>$account->amount, 'user'=>$user, 'todaysearning'=>$todaysearning])->layout('layouts.app');
    }
}
