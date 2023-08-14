<?php

namespace App\Http\Livewire\Room;
use App\Models\Room;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Index extends Component
{
    use Actions;
    public $roomName;
    public $description;
    public $capacity;

    //public $test;

    public $rules = [
        'roomName' => 'required',
        'capacity' => 'required',
        'description' => 'required',
    ];

    public function addRoom()
    {
        $validated = Validator::make(
            [
                'roomName' => $this->roomName,
                'capacity' => $this->capacity,
                'description' => $this->description,
            ],
            [
                'roomName' => [
                    'required',
                    Rule::unique('rooms', 'name')->ignore($this->roomName)
                ],
                'description' => 'required',
                'capacity' => 'required',
            ],
        )->validate();

        try{
            DB::beginTransaction();

            $room = new Room();
            $room->name = $this->roomName;
            $room->description = $this->description;
            $room->capacity = $this->capacity;

            if($room->save())
            {
                DB::commit();

                $this->dialog()->success(
                    $title = 'Room saved',
                    $description = 'Room was successfully saved'
                );

                return redirect()->route('room');

                // $this->dialog([
                //     'title'       => 'Room saved',
                //     'description' => 'Room was successfully saved',
                //     'icon'        => 'success',

                //     'onClose' => [
                //         'method' => 'pageLoad',
                //         'params' => 'onClose',
                //     ],
                // ]);
            }
            else{
                DB::rollback();
                $this->dialog()->error(
                    $title = 'Error !!!',
                    $description = 'Room was not saved'
                );
            }

        }catch (\Throwable $th)
        {
            DB::rollback();
            dd($th->getMessage());
        }
    }

    public function pageLoad()
    {
        return redirect()->route('room');
    }
    public function render()
    {
        return view('livewire.room.index');
    }
}
