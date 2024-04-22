<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('nama_siswa', 'like', '%' . request('search') . '%')
                        ->orWhere('keterangan', 'like', '%' . request('search') . '%');
        };
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
