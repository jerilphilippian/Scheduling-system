<?php

namespace App\Http\Livewire\Approval;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use WireUi\Traits\Actions;

class Decline extends Component
{
    use Actions;
    public function mount($id)
    {
        DB::beginTransaction();
        $event = Event::find($id);
        $event->is_approved = 2;

        if($event->save())
        {
            DB::commit();
            $this->dialog()->success(
                    $title = 'Approved',
                    $description = 'Invitation has been Declined.'
                );
                return redirect()->route('approval.index');
        }
        else{
            DB::rollback();
            $this->dialog()->error(
                $title = 'Error !!!',
                $description = 'Invitation was not declined. Please try again.'
            );
            return redirect()->route('approval.index');
        }

    }

    public function render()
    {
        return view('livewire.approval.index');
    }
}
