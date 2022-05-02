<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Accounts;
use App\Models\DonationTransactions;
use App\Models\Transactions;
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

        $todayearning = DonationTransactions::whereDay('created_at','=',Carbon::now()->day)->where('userid','=',Auth::user()->userid)->where('type','=','credit')->get();
        $todaysearning = 0;
        foreach ($todayearning as $todayearning) {
            $todaysearning = $todaysearning + $todayearning->amount;
        }

        $todaywithdrawal = Transactions::whereDay('created_at','=',Carbon::now()->day)->where('userid','=',Auth::user()->userid)->where('type','=','debit')->get();
        $todayswithdrawal = 0;
        foreach ($todaywithdrawal as $todaywithdrawal) {
            $todayswithdrawal = $todayswithdrawal + $todaywithdrawal->amount;
        }

        $withdrawals = Transactions::where('userid','=',Auth::user()->userid)->where('type','=','debit')->get();
        $withdrawal = 0;
        foreach ($withdrawals as $withdrawals) {
            $withdrawal = $withdrawal + $withdrawals->amount;
        }

        $yesterdayearning = DonationTransactions::where('userid','=',Auth::user()->userid)->whereDate('created_at','=',Carbon::yesterday())->where('type','=','credit')->get();
        $yesterdaysearning = 0;
        foreach ($yesterdayearning as $yesterdayearning) {
            $yesterdaysearning = $yesterdaysearning + $yesterdayearning->amount;
        }
             if($todaysearning<$yesterdaysearning){
                 $thanyesterdayamount = $yesterdaysearning - $todaysearning;
                 if ($todaysearning<1){
                     $thanyesterdaypercent = 0;
                 }else{
                     $thanyesterdaypercent = $yesterdaysearning / $todaysearning * 100;
                 }

             }elseif($todaysearning>$yesterdaysearning){
                 $thanyesterdayamount = $todaysearning - $yesterdaysearning;
                 if($yesterdaysearning<1){
                     $thanyesterdaypercent = 0;
                 }else{
                     $thanyesterdaypercent = $todaysearning / $yesterdaysearning * 100;
                 }

             }else{
                 $thanyesterdayamount = 0;
                 $thanyesterdaypercent = 0;
             }
        return view('livewire.dashboard.wallet-component',
            [
                'account'=>$account->amount,
                'user'=>$user,
                'todaysearning'=>$todaysearning,
                'todayswithdrawal'=>$todayswithdrawal,
                'withdrawal'=>$withdrawal,
                'yesterdaysearning'=>$yesterdaysearning,
                'thanyesterdayamount'=>$thanyesterdayamount,
                'thanyesterdaypercent'=>$thanyesterdaypercent
            ])->layout('layouts.app');
    }
}
