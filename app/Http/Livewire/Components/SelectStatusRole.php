<?php

namespace App\Http\Livewire\Components;

use App\Models\Roles;
use Livewire\Component;
use WireUi\Traits\Actions;

class SelectStatusRole extends Component
{

    use Actions;

    public $role_id;
    public $is_active;
    public $name;
    public $status;

    public function mount()
    {
        $this->status = $this->is_active;
    }
    public function updatedStatus($value)
    {
        $role = Roles::find($this->role_id);
        $role->is_active = $value;

        if ($role->save()) {
            $this->emit('refresh-table');

            $this->dialog()->success(
                $title = 'Role Updated',
                $description = 'Role was Updated Successfully'
            );
        } else {
            $this->dialog()->success(
                $title = 'Error',
                $description = 'Updating Role Error'
            );
        }
    }
    public function render()
    {
        return view('livewire.components.select-status-role');
    }
}
