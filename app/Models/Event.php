<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'event_type_id', 'room_id', 'user_id', 'event_date', 'start_time', 'end_time', 'event_description'];

    public function room()
    {
        return  $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }

    public function invitations()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id')->wherePivot('user_id', Auth::user()->id);
    }

    public function event_type()
    {
        return  $this->belongsTo(EventType::class, 'event_type_id', 'id');
    }
}
