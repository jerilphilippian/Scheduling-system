<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use Carbon\Carbon;

class Events extends Component
{

    public $eventList;

    public function mount(){
        $this->eventList = Event::with('users')->get();
    }

    public function render()
    {
        return view('livewire.events.events');
    }
}
