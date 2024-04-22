<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('nama', 'like', '%' . request('search') . '%')
                        ->orWhere('username', 'like', '%' . request('search') . '%')
                        ->orWhere('email', 'like', '%' . request('search') . '%')
                        ->orWhere('kelas', 'like', '%' . request('search') . '%');
        };
    }


    public function user_details()
    {
        return $this->hasOne(UserDetails::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function data_agendas()
    {
        return $this->belongsTo(dataAgenda::class);
    }

    public function kategoris()
    {
        return $this->belongsTo(KategoriAgenda::class);
    }

    public function nilaiPraktik()
    {
        return $this->hasMany(nilaiPraktik::class, 'user_id'); 
    }
    
    // public function absensis()
    // {
    //     return $this->hasMany(Absensi::class);
    // }
    // public function koordinator_p_k_l_s()
    // {
    //     return $this->hasMany(KoordinatorPKL::class);
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
