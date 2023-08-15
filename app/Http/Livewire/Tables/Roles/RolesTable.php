<?php

namespace App\Http\Livewire\Tables\Roles;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Roles;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class RolesTable extends DataTableComponent
{
    protected $model = Roles::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Permission name", "permission_name")
                ->sortable(),
            Column::make("Status", "is_active")
            ->format(function($value, $row, Column $column) {
                return Blade::render("<livewire:components.select-status-role role_id='{{ $row->id }}'
                name='" . $row->name . "' is_active='" . $row->is_active . "'
                wire:key='" . $row->id . "'>");
            })
            ->html(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn($row) => 'Edit')
                ->location(fn($row) => "#")
                ->attributes(fn($row) => [
                    'class' => 'outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     ring-red-500 text-white bg-red-500 hover:bg-red-600 hover:ring-red-600
                    dark:ring-offset-slate-800 dark:bg-red-700 dark:ring-red-700
                    dark:hover:bg-red-600 dark:hover:ring-red-600',
                    'wire:click'=>'editRoles('.$row->id.')'
                ]),
        ];
    }

    public function editRoles($row){
        $this->emitTo('user-management.roles.index', 'editRoles', $row);
    }
}
