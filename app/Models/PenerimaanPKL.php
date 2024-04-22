<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanPKL extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('nama', 'like', '%' . request('search') . '%')
                        ->orWhere('kelas', 'like', '%' . request('search') . '%');
        };
    }

    // public function koordinator_p_k_l_s()
    // {
    //     return $this->belongsTo(KoordinatorPKL::class, 'koordinator_id');
    // }

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
