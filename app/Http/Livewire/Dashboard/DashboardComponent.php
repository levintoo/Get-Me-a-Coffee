<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Accounts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{

    public function render()
    {
        $account = Accounts::where('userid',Auth::user()->userid)->first();
        if ($account != "")
        {
//            $account = "something";
        }else{
            $account = "nothing";
        }
        return view('livewire.dashboard.dashboard-component',['account'=>$account->amount])->layout('layouts.app');
    }
}
