<?php

namespace App\Http\Livewire\UserManagement\Position;

use App\Models\Position;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use WireUi\Traits\Actions;

class Index extends Component
{

    use Actions;

    public $openAddPositionModal = false;
    public $openEditModal = false;
    public $positionID;
    public $position;
    public $editPosition;

    protected $listeners = ['editPosition'=>'editPositionModal'];

    // open add position modal
    public function addPositionModal(){
        $this->openAddPositionModal = true;
    }
    // open add position modal

    // open edit modal
    public function editPositionModal($id){
        $this->openEditModal = true;
        $this->positionID = $id;
        $position = Position::find($id);
        $this->editPosition = $position->name;
    }
    // open edit modal

    // save position to database
    public function savePosition(){
        try {
            DB::beginTransaction();
            $position = new Position();
            $position->name = $this->position;

            if($position->save()){
                DB::commit();
                $this->resetInput();
                $this->emit('refreshDatatable');
                $this->dialog()->show([
                    'title'       => 'Position saved!',
                    'description' => 'New position was successfully saved',
                    'icon'        => 'success'
                ]);
            }else{
                DB::rollBack();
            }

        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th->getMessage());
        }
    }
    // save position to database

    public function editPositionData(){
        try {
            DB::beginTransaction();
            $position = Position::find($this->positionID);
            $position->name = $this->editPosition;
            if($position->save()){
                DB::commit();
                $this->resetInput();
                $this->emit('refreshDatatable');
                $this->dialog()->show([
                    'title'       => 'Position updated!',
                    'description' => 'Position was successfully updated',
                    'icon'        => 'success'
                ]);
            }else{
                DB::rollBack();
                $this->dialog()->show([
                    'title'       => 'Failed!',
                    'description' => 'Position Updated Failed',
                    'icon'        => 'error'
                ]);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    // reset input
    public function resetInput(){
        $this->reset(['position', 'openAddPositionModal', 'openEditModal']);
    }
    // reset input

    public function render()
    {
        return view('livewire.user-management.position.index');
    }
}
