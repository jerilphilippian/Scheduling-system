<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;
use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class InvitationTable extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setEmptyMessage('No results found...');
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        //return Event::query()->select('events.*')->with(['room'])->where('is_approved', 1);
        //return User::query()->with(['user_data', 'user_data.department'])
        return Event::query()->has('invitations');
    }

    public function columns(): array
    {
        return [
            Column::make("Event", "name")
                ->sortable()
                ->searchable(),
            Column::make("Rooms", "room.name")
                ->sortable()
                ->searchable(),
            Column::make("Date", "event_date")
                ->sortable()
                ->searchable(),
            Column::make("Time", "start_time")
                ->sortable()
                ->searchable()
                ->format(
                    fn ($value, $row, Column $column) => $row->start_time.' - '. $row->end_time
                ),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View')
                        ->title(fn ($row) => 'View')
                        ->location(function ($row) {
                            route('invitation.view', $row->id);
                        })
                        ->attributes(function ($row) {
                            return [
                                'class' => 'py-[8px] px-[16px] bg-[#374151] rounded',
                            ];
                        }),

                ]),
        ];
    }
}
