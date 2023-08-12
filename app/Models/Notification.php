<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function invites(){
        return  $this->belongsTo(Invite::class, 'invite_id', 'id');
    }
}
