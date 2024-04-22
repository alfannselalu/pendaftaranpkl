<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAgenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('kategori', 'like', '%' . request('search') . '%');
        };
    }
    
}
