<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeComponent extends Component
{
    public $user;
    public $sorting;
    public $pagesize;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 10;
    }

    public function render()
    {
        $user = User::select('name', 'username', 'category', 'email', 'photo', 'status', 'utype')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        return view('livewire.admin.admin-home-component',['users'=>$user]);
    }
}
