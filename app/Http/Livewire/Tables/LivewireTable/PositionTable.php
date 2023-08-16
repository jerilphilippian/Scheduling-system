<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Position;

class PositionTable extends DataTableComponent
{
    protected $model = Position::class;

    public function configure(): void
    {
        $this->setEmptyMessage('No results found...');
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    fn($row, column $column) => view('layouts.components.buttons.position-button-edit')
                    ->withRow($row)
                )
                ->html()
        ];
    }

    public function openEditModal($row){
        $this->emitTo('user-management.position.index', 'editPosition', $row );
    }
}
