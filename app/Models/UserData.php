<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $table = "user_datas";

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
