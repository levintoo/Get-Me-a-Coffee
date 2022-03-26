<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonorDetails extends Component
{
    public function render()
    {
        return view('livewire.donor-details')->layout('layouts.base');
    }
}
