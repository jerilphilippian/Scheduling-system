<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function room(){
        return  $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'invites', 'event_id', 'user_id');
    }

    public function event_type(){
        return  $this->belongsTo(EventType::class, 'event_type_id', 'id');
    }
}
