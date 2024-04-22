<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPrakerin extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function user_details()
    {
        return $this->belongsTo(UserDetails::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
