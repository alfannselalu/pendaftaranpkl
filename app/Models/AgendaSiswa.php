<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaSiswa extends Model
{
    use HasFactory;

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('nama', 'like', '%' . request('search') . '%')
                        ->orWhere('kategori', 'like', '%' . request('search') . '%');
        };
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function data_agendas()
    {
        return $this->belongsTo(dataAgenda::class);
    }

    public function kategori_agendas()
    {
        return $this->belongsTo(KategoriAgenda::class);
    }
}
