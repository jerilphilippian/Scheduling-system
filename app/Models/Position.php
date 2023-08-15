<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users(){
        return $this->hasOne(UserData::class, 'position_id', 'id');
    }
}
