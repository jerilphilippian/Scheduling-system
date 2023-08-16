<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ApprovalTable extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('No results found...');
    }

    public function builder(): Builder
    {
        return Event::query()->select('events.*')->with(['room'])->where('is_approved', false);
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
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    fn($row, Column $column) => view('layouts.components.buttons.approval-table-button')
                    ->withRow($row)
                )
                ->html()
            ];


    }
}
