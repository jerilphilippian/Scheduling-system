<?php

namespace App\Traits;

use App\Models\Event;
use Illuminate\Support\Arr;

trait EventTrait
{
    public $editEventModal = false;

    public $event_id;
    public Event $event;

    public $eventEditName;
    public $eventEditType;
    public $eventEditRoom;
    public $eventEditDate;
    public $startEditTime;
    public $endEditTime;
    public $eventEditDescription;
    public $eventEditUser = [];
    public $selectedEditUsers;

    public function editEventModal(Event $id)
    {
        $this->event = $id;
        $this->event->load('event_type');
        $this->editEventModal = true;
        $this->event_id = $id;
        $this->eventEditName = $this->event->name;
        $this->eventEditType = $this->event->event_type->id;
        $this->eventEditRoom = $this->event->room->id;
        $this->eventEditDate = $this->event->event_date;
        $this->startEditTime = $this->event->start_time;
        $this->endEditTime = $this->event->end_time;
        $this->eventEditDescription = $this->event->event_description;
        $this->eventEditUser = Arr::map($this->event->users->toArray(), function($value){
            return $value['id'];
        });

    }
}
