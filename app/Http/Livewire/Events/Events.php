<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use Carbon\Carbon;

class Events extends Component
{

    public $eventList;

    public function mount(){
        $now = Carbon::now();
        $startOfWeek = $now->copy()->startOfWeek();
        $endOfWeek = $now->copy()->endOfWeek();
        $this->eventList = Event::with('users')->whereBetween('event_date', [$startOfWeek, $endOfWeek])->get();
    }

    public function render()
    {
        return view('livewire.events.events');
    }
}
