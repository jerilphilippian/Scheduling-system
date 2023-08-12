<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    public function events(){
        return  $this->hasOne(Event::class, 'event_type_id', 'id');
    }
}
