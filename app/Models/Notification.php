<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function event_user(){
        return  $this->belongsTo(EventUser::class, 'event_user_id', 'id');
    }
}
