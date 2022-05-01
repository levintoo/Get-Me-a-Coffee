<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\DonationTransactions;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Transactionscomponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
    }
    public function render()
    {
        $transactions = DonationTransactions::where('userid','=',Auth::user()->userid)->where('status','=',0)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);

        return view('livewire.dashboard.transactionscomponent',['transactions'=>$transactions]);
    }
    public function donations(){
        $transactions = DonationTransactions::where('userid','=',Auth::user()->userid)->where('status','=',0)->where('purpose','=','withdrawal')->first();
return $transactions;
    }
}
