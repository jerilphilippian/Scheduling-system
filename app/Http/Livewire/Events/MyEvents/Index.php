<?php

namespace App\Http\Livewire\Events\MyEvents;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Room;
use App\Models\User;
use App\Traits\EventTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use WireUi\Traits\Actions;
use WireUi\View\Components\Modal;

class Index extends Component
{
    use Actions;
    use EventTrait;

    public $addEventModal = false;
    // public $editEventModal = false;
    public $event_type;
    public $approval;
    //Datas of the event


    public $listeners = [
        'editModal' => 'editEventModal'
    ];

    public $rules = [
        'eventName' => 'required',
        'eventType' => 'required',
        'eventRoom' => 'required',
        'eventDate' => 'required',
        'startTime' => 'required',
        'endTime' => 'required',
        'eventDescription' => 'required',
        'eventUser' => 'required',
    ];

    //Create functions of events
    public function create()
    {
        $validated = $this->validate();

        try {
            DB::beginTransaction();
            $room = Room::find($this->eventRoom);
            // $type = EventType::find($this->eventType);
            $participants = $this->eventUser;

            //Missing of approval
            // $user_id = Auth::user()->roles->permission_name"Admin";
            // dd($user_id);
            // if($user_id){
            //     $this->approval = 1;
            // }else{
            //     $this->approval = 0;
            // }

            $event = $room->events()->create(
                [
                    'name' => $this->eventName,
                    'event_type_id' => $this->eventType,
                    'room_id' => $this->eventRoom,
                    'event_date' => $this->eventDate,
                    'start_time' => $this->startTime,
                    'end_time' => $this->endTime,
                    'event_description' => $this->eventDescription,
                    // 'is_approved' => $this->approval,
                ]
            );


            $users = $event->users()->sync($this->eventUser);

            if ($event) {
                DB::commit();
                $this->resetField();
                $this->emit('refreshDatatable');
                $this->dialog()->success(
                    $title = 'Event Save',
                    $description = 'New event was successfully saved'
                );
            } else {
                $this->dialog()->error(
                    $title = 'Error !!!',
                    $description = 'Your profile was not saved'
                );
                DB::rollBack();
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }

    //Edit Events
    public function edit(){
        $validated = $this->validate();

        try {
            DB::beginTransaction();
            //update & edit
            $event = Event::updateOrCreate(['id' => $this->event->id],
            [
                'name' => $this->eventName,
                'event_type_id' => $this->eventType,
                'room_id' => $this->eventRoom,
                'event_date' => $this->eventDate,
                'start_time' => $this->startTime,
                'end_time' => $this->endTime,
                'event_description' => $this->eventDescription,
                // 'is_approved' => $this->approval,
            ]);
            //many to many
            $users = $event->users()->sync($this->eventUser);

            if ($users) {
                DB::commit();
                $this->resetField();
                $this->emit('refreshDatatable');
                $this->dialog()->success(
                    $title     = 'Are you Sure?',
                    $description = 'Save the information?'
                );


            }
        } catch (\Throwable $th) {
            $this->dialog()->error(
                $title     = 'Error!',
                $description = 'User not valid'
            );

            DB::rollBack();
            dd($th);
        }

    }


    // function to open modal
    public function openModal()
    {
        $this->addEventModal = true;
    }

    // function for edit modal
    // public function editModal()
    // {
    //     // $this->editEventModal = true;
    //     dd('test');
    // }

    public function updatedEventUser($value)
    {
        $this->selectedUsers = User::with('user_data')->whereIn('id', $value)->get();
    }

    public function resetField(){
        $this->reset(['addEventModal', 'editEventModal']);
    }

    // public function resetField(){
    //     $this->reset(['addEventModal', 'editEventModal']);
    // }

    public function render()
    {
        return view('livewire.events.my-events.index');
    }
}
