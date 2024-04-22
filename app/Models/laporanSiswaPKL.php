<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporanSiswaPKL extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userDetails()
    {
        return $this->belongsTo(UserDetails::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
