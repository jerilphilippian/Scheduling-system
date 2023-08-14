<?php

namespace App\Http\Livewire\UserManagement\Department;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{

    public $departmentAddModal = false;
    public $departmentEditModal = false;
    public $departmentName;
    public $departmentID;

    protected $listeners = ['editRoles'=>'editRolesModal'];

    // open add department modal
    public function openDepartmentModal(){
        $this->departmentAddModal = true;
    }
    // open add department modal

    // open edit department modal
    public function editRolesModal($id){
        $this->departmentEditModal = true;
        $department = Department::find($id);
        $this->departmentName = $department->name;
        $this->departmentID = $id;
    }
    // open edit department modal

    // save department to database
    public function saveDepartment(){
        try {
            DB::beginTransaction();
            $dapartment = new Department();
            $dapartment->name = $this->departmentName;

            if($dapartment->save()){
                DB::commit();
                $this->resetInput();
                $this->emit('refreshDatatable');
            }else{
                DB::rollBack();
                dd('Save department failed');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }
    // save department to database


    // update department
    public function updateDepartment(){
        try {
            DB::beginTransaction();
            $department = Department::find($this->departmentID);
            $department->name = $this->departmentName;

            if($department->save()){
                DB::commit();
                $this->emit('refreshDatatable');
                $this->reset('departmentEditModal');
            }else{
                DB::rollBack();
                dd('Failed to update');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }
    // update department

    public function resetInput(){
        $this->reset(['departmentName', 'departmentAddModal']);
    }

    // open edit modal

    // open edit modal

    public function render()
    {
        return view('livewire.user-management.department.index');
    }
}
