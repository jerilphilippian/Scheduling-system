<?php

namespace App\Http\Livewire\UserManagement\Department;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use WireUi\Traits\Actions;

class Index extends Component
{

    use Actions;

    public $departmentAddModal = false;
    public $departmentEditModal = false;
    public $departmentName;
    public $editDepartmentName;
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
        $this->editDepartmentName = $department->name;
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
                $this->dialog()->show([
                    'title'       => 'Department saved!',
                    'description' => 'New Department was successfully added',
                    'icon'        => 'success'
                ]);
            }else{
                DB::rollBack();
                $this->dialog()->show([
                    'title'       => 'Save failed',
                    'description' => 'New Department was failed to be added',
                    'icon'        => 'error'
                ]);
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
            $department->name = $this->editDepartmentName;

            if($department->save()){
                DB::commit();
                $this->resetInput();
                $this->dialog()->show([
                    'title'       => 'Department updated!',
                    'description' => 'Department was successfully updated',
                    'icon'        => 'success'
                ]);
            }else{
                DB::rollBack();
                $this->dialog()->show([
                    'title'       => 'Updated failed!',
                    'description' => 'Department update failed',
                    'icon'        => 'error'
                ]);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }
    // update department

    public function resetInput(){
        $this->reset(['departmentName', 'departmentAddModal', 'departmentEditModal']);
        $this->emit('refreshDatatable');
    }

    // open edit modal

    // open edit modal

    public function render()
    {
        return view('livewire.user-management.department.index');
    }
}
