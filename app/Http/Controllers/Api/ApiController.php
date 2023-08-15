<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\EventType;
use App\Models\Roles;
use App\Models\Room;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function eventtypesReferences(Request $request): Collection
    {
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

    public function departmentReferences(Request $request): Collection
    {
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

    public function roomReferences(Request $request): Collection
    {
        return Room::query()
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

    public function rolesReferences(Request $request): Collection
    {
        return Roles::query()
            ->select('id', 'permission_name')
            ->orderBy('permission_name')
            ->where('is_active',true)
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('permission_name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(100)
            )
            ->get();
    }

    public function userReferences(Request $request): Collection
    {
        return User::query()->with(['user_data', 'user_data.department'])
            // ->join('user_datas', 'users.id', '=', 'user_datas.user_id')
            ->select('id')
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->whereHas('user_data', function (Builder $query) use ($request) {
                        $query->where('first_name', 'like', "%{$request->search}%")->orWhere('last_name', 'like', "%{$request->search}%");
                    })
                    ->orWhereHas('user_data.department', function (Builder $query) use ($request) {
                        $query->where('name', 'like', "%{$request->search}%");
                    })
            )->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get()
            ->map(function(User $user){
                return $user->append(['full_name']);
            });
    }
}
