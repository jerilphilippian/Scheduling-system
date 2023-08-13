<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    use HasFactory;

    public function notifications(){
        return  $this->hasOne(Notification::class, 'event_user_id', 'id');
    }
}
