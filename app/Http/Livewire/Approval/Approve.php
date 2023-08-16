<?php

namespace App\Http\Livewire\Approval;
use WireUi\Traits\Actions;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Approve extends Component
{
    use Actions;
    public function mount($id)
    {
        DB::beginTransaction();
        $event = Event::find($id);
        $event->is_approved = 1;

        if($event->save())
        {
            DB::commit();
            $this->dialog()->success(
                    $title = 'Approved',
                    $description = 'Invitation has been Approved.'
                );
                return redirect()->route('approval.index');
        }
        else{
            DB::rollback();
            $this->dialog()->error(
                $title = 'Error !!!',
                $description = 'Invitation was not approved. Please try again.'
            );
            return redirect()->route('approval.index');
        }

    }

    public function render()
    {
        return view('livewire.approval.index');
    }
}
