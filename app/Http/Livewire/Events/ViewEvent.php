<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;

class ViewEvent extends Component
{
    public function render()
    {
        return view('livewire.events.view-event');
    }
}
