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
    {
        $account = Accounts::where('userid',Auth::user()->userid)->first();
        if ($account != "")
        {
//            $account = "something";
        }else{
            $account = "";
        }
        $user = User::where('userid',Auth::user()->userid)->first();
        $todayearning = DonationTransactions::whereDay('created_at','=',Carbon::now()->day)->where('userid','=',Auth::user()->userid)->where('purpose','=','donation')->where('type','=','credit')->get();
        $todaywithdrawal = DonationTransactions::whereDay('created_at','=',Carbon::now()->day)->where('userid','=',Auth::user()->userid)->where('type','=','debit')->where('purpose','=','withdrawal')->get();
        $withdrawals = DonationTransactions::where('userid','=',Auth::user()->userid)->where('type','=','debit')->where('purpose','=','withdrawal')->get();
        $todaysearning = 0;
        $todayswithdrawal = 0;
        $withdrawal = 0;
        foreach ($todayearning as $todayearning) {
            $todaysearning = $todaysearning + $todayearning->amount;
        }
        foreach ($todaywithdrawal as $todaywithdrawal) {
            $todayswithdrawal = $todayswithdrawal + $todaywithdrawal->amount;
        }
        foreach ($withdrawals as $withdrawals) {
            $withdrawal = $withdrawal + $withdrawals->amount;
        }
        return view('livewire.dashboard.wallet-component',['account'=>$account->amount, 'user'=>$user, 'todaysearning'=>$todaysearning, 'todayswithdrawal'=>$todayswithdrawal, 'withdrawal'=>$withdrawal])->layout('layouts.app');
    }
}
