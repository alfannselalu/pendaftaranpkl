<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaiPraktik extends Model
{
    use HasFactory;

    // protected $table = 'nilai_praktiks';

    // protected $fillable = ['user_id', 'nilai', 'aspek_penilaian'];

    protected $guarded = ['id'];


    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('nilai', 'like', '%' . request('search') . '%')
                        ->orWhere('aspek_penilaian', 'like', '%' . request('search') . '%');
        };
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
