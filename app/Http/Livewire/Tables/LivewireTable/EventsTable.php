<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
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
                    fn($value, $row, Column $column) => $row->start_time . ' - ' . $row->end_time
                ),
            Column::make("Status", "status")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    // LinkColumn::make('Edit') // make() has no effect in this case but needs to be set anyway
                    //     ->title(fn($row) => 'Edit ')
                    //     ->location(fn($row) => '#')
                    //     ->attributes(function($row) {
                    //         return [
                    //             'class' => 'outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     ring-gray-700 text-white bg-gray-700 hover:bg-gray-900 hover:ring-gray-900
                    //             dark:ring-offset-gray-800 dark:bg-gray-700 dark:ring-gray-700
                    //             dark:hover:bg-gray-600 dark:hover:ring-gray-600',
                    //             'onclick' => 'openEditModal({{'.$row->id.'}})'
                    //         ];
                    //     }),

                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn($row) => 'View ')
                        ->location(function ($row) {
                            return route('my-events.view', $row->id);
                        })
                        ->attributes(function($row) {
                            return [
                                'class' => 'outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     ring-red-500 text-white bg-red-500 hover:bg-red-600 hover:ring-red-600
                                dark:ring-offset-slate-800 dark:bg-red-700 dark:ring-red-700
                                dark:hover:bg-red-600 dark:hover:ring-red-600',
                            ];
                        }),
                        Column::make('Actions')
                            ->label( fn($row, Column $column) => view('layouts.components.buttons.event-button-edit')->withRow($row))
                            ->html(),
                    ]),
        ];
    }

    public function openEditModal($id){
        dd('test');
    }
}
