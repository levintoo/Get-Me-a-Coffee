<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Donations;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Donationscomponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
    }
    public function render()
    {
        $donations = Donations::where('userid','=',Auth::user()->userid)->where('status','=',0)->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.dashboard.donationscomponent',['donations'=>$donations]);
    }
}
