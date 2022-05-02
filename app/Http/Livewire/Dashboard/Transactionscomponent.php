<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Transactionscomponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
    }
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        if($this->sorting == "default"){
            $transactions = Transactions::where('userid','=',Auth::user()->userid)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);
            if($transactions->isEmpty()){
                session::flash('message','Theres something to show here');
            }
        }
        elseif ($this->sorting == "Initiated")
        {
            $transactions = Transactions::where('userid','=',Auth::user()->userid)->where('status','=',0)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);
            if($transactions->isEmpty()){
                session::flash('message','Theres nothing to show here');
            }
        }
        elseif ($this->sorting == "Pending")
        {
            $transactions = Transactions::where('userid','=',Auth::user()->userid)->where('status','=',1)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);
            if($transactions->isEmpty()){
                session::flash('message','Theres nothing to show here');
            }
        }
        elseif ($this->sorting == "Completed")
        {
            $transactions = Transactions::where('userid','=',Auth::user()->userid)->where('status','=',2)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);
            if($transactions->isEmpty()){
                session::flash('message','Theres nothing to show here');
            }
        }
        elseif ($this->sorting == "Cancelled")
        {
            $transactions = Transactions::where('userid','=',Auth::user()->userid)->where('status','=',3)->where('purpose','=','withdrawal')->orderBy('created_at','DESC')->paginate(10);
            if($transactions->isEmpty()){
                session::flash('message','Theres nothing to show here');
            }
        }

        return view('livewire.dashboard.transactionscomponent',['transactions'=>$transactions]);
    }
    public function sortingDefault()
    {
        $this->sorting = "default";
    }
    public function sortingInitiated()
    {
       $this->sorting = "Initiated";
    }
    public function sortingPending()
    {
        $this->sorting = "Pending";
    }
    public function sortingCompleted()
    {
        $this->sorting = "Completed";
    }
    public function sortingCancelled()
    {
        $this->sorting = "Cancelled";
    }
}
