<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $attributes = [
    //     'user_id' => 0, // Ganti dengan nilai default yang sesuai
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penerimaan_p_k_l_s()
    {
        return $this->hasMany(PenerimaanPKL::class);
    }

    public function laporanSiswaPKL()
    {
        return $this->hasMany(laporanSiswaPKL::class);
    }
    // public function koordinator_p_k_l_s()
    // {
    //     return $this->hasMany(KoordinatorPKL::class);
    // }
}
