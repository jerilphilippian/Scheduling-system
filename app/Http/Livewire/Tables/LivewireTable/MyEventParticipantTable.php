<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Database\Eloquent\Builder;

class MyEventParticipantTable extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setEmptyMessage('No results found...');
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        // dd(EventUser::query()->where('event_id', 8)->with(['user'])->get());
        return EventUser::query()->where('event_id', 8)->with('user');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
            ->sortable(),
            Column::make("Participant Name", "user.name")
            ->sortable(),
            Column::make("Department", "user.user_data.department.name")
            ->sortable()
        ];
    }
}
