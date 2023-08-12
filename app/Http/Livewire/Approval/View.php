<?php

namespace App\Http\Livewire\Approval;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class View extends Component
{

    public $eventTitle;
    public $eventOrganizer;
    public $eventDate;
    public $eventStartTime;
    public $eventEndTime;
    public $eventDesc;


    public function mount($id){

        $eventData = Event::find($id);
        $this->eventTitle = $eventData->name;
        $this->eventOrganizer = $eventData->name;
        $this->eventDate = $eventData->event_date;
        $this->eventStartTime = Carbon::parse($eventData->start_time)->format('g:i A');
        $this->eventEndTime = Carbon::parse($eventData->end_time)->format('g:i A');
        $this->eventDesc = $eventData->event_description;
        $this->eventOrganizer = $eventData->user->name;
    }

    public function render()
    {
        return view('livewire.approval.view');
    }
}
