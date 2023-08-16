<?php

namespace App\Http\Livewire\Tables\LivewireTable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Department;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class DepartmentTable extends DataTableComponent
{
    protected $model = Department::class;

    public function configure(): void
    {
        $this->setEmptyMessage('No results found...');
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return Department::query()->select('departments.*');
    }

    public function columns(): array
    {
        return [
            Column::make("Department name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    fn($row, column $column) => view('layouts.components.buttons.department-button-edit')
                    ->withRow($row)
                )
                ->html()
        ];
    }

    public function openEditModal($row){
        $this->emitTo('user-management.department.index', 'editRoles', $row );
    }
}
