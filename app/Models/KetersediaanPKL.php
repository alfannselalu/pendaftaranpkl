<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetersediaanPKL extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('posisi', 'like', '%' . request('search') . '%');
        };
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
