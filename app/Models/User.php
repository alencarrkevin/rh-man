<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as authenticable;
use Illuminate\Notifications\Notifiable;

class User extends authenticable
{
    //
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
