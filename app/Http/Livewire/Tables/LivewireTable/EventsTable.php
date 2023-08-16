<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use App\Traits\EventTrait;
use App\Models\EventUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use WireUi\View\Components\Button;

class EventsTable extends DataTableComponent
{
    // use EventTrait;

    protected $model = Event::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('No results found...');
    }

    public function builder(): Builder
    {
        return Event::query()->select('events.*')->with(['room']);
    }

    public function columns(): array
    {
        return [
            Column::make("Event", "name")
                ->sortable()
                ->searchable(),
            Column::make("Rooms", "room.name")
                ->sortable(),
            Column::make("Date", "event_date")
                ->sortable(),
            Column::make("Time", "start_time")
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => $row->start_time . ' - ' . $row->end_time
                ),
            Column::make("Status", "status")
                ->sortable(),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column)  => Blade::render('<x-button red label="Edit Event" wire:click="$emitUp(\'editModal\' ,' . $row->id . ')" />')
                )
                ->html(),
            // ButtonGroupColumn::make('Actions')
            //     ->attributes(function ($row) {
            //         return [
            //             'class' => 'space-x-2',
            //         ];
            //     })
            //     ->buttons([
            //         LinkColumn::make('Edit') // make() has no effect in this case but needs to be set anyway
            //             ->title(fn ($row) => 'Edit ')
            //             ->location(fn ($row) => '#')
            //             ->attributes(function ($row) {
            //                 return [
            //                     'class' => 'py-[8px] px-[16px] bg-[#374151] rounded',
            //                     'date-modal-target' => 'editEventModal',
            //                     'data-modal-toggle' => 'editEventModal'
            //                 ];
            //             }),
            //         LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
            //             ->title(fn ($row) => 'View ')
            //             ->location(function ($row) {
            //                 return route('my-events.view', $row->id);
            //             })
            //             ->attributes(function ($row) {
            //                 return [
            //                     'class' => 'py-[8px] px-[16px] bg-[#ef4444] rounded',
            //                 ];
            //             }),

            //     ]),
        ];
    }

    public function openEditModal($id){
        dd('test');
    }

}
