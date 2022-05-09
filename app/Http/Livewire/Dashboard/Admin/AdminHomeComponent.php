<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AdminHomeComponent extends Component
{
    public function mount()
    {
       }
    public function render()
    {
        return view('livewire.dashboard.admin.admin-home-component');
    }
}
