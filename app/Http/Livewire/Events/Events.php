<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use Carbon\Carbon;

class Events extends Component
{

    public $eventList;

    public function mount(Event $eventsList){
        $this->eventList = Event::all();
    }

    public function render()
    {
        return view('livewire.events.events');
    }
}
