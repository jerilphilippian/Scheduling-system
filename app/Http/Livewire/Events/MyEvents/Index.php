<?php

namespace App\Http\Livewire\Events\MyEvents;

use Livewire\Component;
use WireUi\View\Components\Modal;

class Index extends Component
{

    public $addEventModal = false;
    public $editEventModal = false;
    public $event_type;

    // function to open modal
    public function openModal(){
        $this->addEventModal = true;
    }

    // function for edit modal
    public function editModal(){
        // $this->editEventModal = true;
        dd('test');
    }

    public function render()
    {
        return view('livewire.events.my-events.index');
    }
}
