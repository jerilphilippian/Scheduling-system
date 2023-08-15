<?php

namespace App\Traits;

use App\Models\Event;
use Illuminate\Support\Arr;

trait EventTrait
{
    public $editEventModal = false;

    public $event_id;
    public Event $event;

    public $eventName;
    public $eventType;
    public $eventRoom;
    public $eventDate;
    public $startTime;
    public $endTime;
    public $eventDescription;
    public $eventUser = [];
    public $selectedUsers;

    public function editEventModal(Event $id)
    {
        $this->event = $id;
        $this->event->load('event_type');
        $this->editEventModal = true;
        $this->event_id = $id;
        $this->eventName = $this->event->name;
        $this->eventType = $this->event->event_type->id;
        $this->eventRoom = $this->event->room->id;
        $this->eventDate = $this->event->event_date;
        $this->startTime = $this->event->start_time;
        $this->endTime = $this->event->end_time;
        $this->eventDescription = $this->event->event_description;
        $this->eventUser = Arr::map($this->event->users->toArray(), function($value){
            return $value['id'];
        });

    }
}
