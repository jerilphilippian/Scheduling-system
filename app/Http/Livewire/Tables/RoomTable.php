<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Room;

use function Laravel\Prompts\search;

class RoomTable extends DataTableComponent
{
    protected $model = Room::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->hideIf(true),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Description", "description")
                ->sortable()
                ->searchable(),
            Column::make("Capacity", "capacity")
                ->sortable()
                ->searchable(),
            // Column::make("Created at", "created_at")
            //     ->sortable(),
            // Column::make("Updated at", "updated_at")
            //     ->sortable(),
        //     Column::make('Actions')
        // ->label(
        //     fn($row, column $column) => view('layouts.components.buttons.room-table-buttons-edit')
        //     ->withRow($row)
        // )
        // ->html()
        ];
    }
}
