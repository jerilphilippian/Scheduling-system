<?php

namespace App\Http\Livewire\UserManagement;

use Livewire\Component;

class Index extends Component
{

    public $addModalOpen = false;

    public function openAddModal(){
        $this->addModalOpen = true;
    }

    public function editRoles(){
        dd("open edit modal");
    }

    public function render()
    {
        return view('livewire.user-management.index');
    }
}
