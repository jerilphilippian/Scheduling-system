<?php

namespace App\Http\Livewire\Events\Invitation;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Index extends Component
{
    public $user;

    public function render()
    {
        $this->user = Auth::user();
        return view('livewire.events.invitation.index');
    }
}
