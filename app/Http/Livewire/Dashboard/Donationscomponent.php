<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Donations;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Donationscomponent extends Component
{
    public function render()
    {
        $donations = Donations::where('userid','=',Auth::user()->userid)->where('status','=',0)->get();
        return view('livewire.dashboard.donationscomponent',['donations'=>$donations]);
    }
    public function allDonations()
    {
        $donations = Donations::where('userid','=',Auth::user()->userid)->where('status','=',0)->get();
        return $donations;
    }
}
