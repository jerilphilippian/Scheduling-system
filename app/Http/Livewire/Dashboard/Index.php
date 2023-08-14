<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $activeUser;
    public $inactiveUser;

    public $totalRooms;

    public function mount()
    {
        $this->activeUser = User::where('is_active', 1)->count();
        $this->inactiveUser = User::where('is_active', 0)->count();

        $this->totalRooms = Room::count();
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
