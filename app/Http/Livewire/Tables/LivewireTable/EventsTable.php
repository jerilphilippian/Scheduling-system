<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use WireUi\View\Components\Button;

class EventsTable extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return Event::query()->with(['room']);
    }

    public function columns(): array
    {
        return [
            Column::make("Event", "name")
                ->sortable(),
            Column::make("Rooms", "room.name")
                ->sortable(),
            Column::make("Date", "event_date")
                ->sortable(),
            Column::make("Time", "start_time")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn($row) => 'View ')
                        ->location(fn($row) => route('events.view', $row->id))
                        ->attributes(function($row) {
                            return [
                                'class' => 'py-[8px] px-[16px] bg-[#ef4444] text-white rounded',
                            ];
                        }),
                        // LinkColumn::make('Edit') // make() has no effect in this case but needs to be set anyway
                        // ->title(fn($row) => 'View ')
                        // ->location(fn($row) => route('events.view', $row->id))
                        // ->attributes(function($row) {
                        //     return [
                        //         'class' => 'py-[8px] px-[16px] bg-[#ef4444] text-white rounded',
                        //     ];
                        // }),

                ]),
        ];
    }
}