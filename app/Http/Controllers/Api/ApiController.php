<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\EventType;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function eventtypesReferences(Request $request): Collection {
        return EventType::query()
            ->select('id', 'type')
            ->orderBy('type')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('type', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    }

    public function departmentReferences(Request $request): Collection {
        return Department::query()
            ->select('id', 'name')
            ->orderBy('name')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    }

    public function userReferences(Request $request): Collection
    {
        return User::query()
            // ->join('user_datas', 'users.id', '=', 'user_datas.user_id')
            ->select('id', 'name')
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
                    ->whereHas('department', function (Builder $query) use ($request) {
                        $query->where('name', 'like', "%{$request->search}%");
                    })
            )->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();

    }

}
