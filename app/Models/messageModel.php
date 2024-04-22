<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
    use HasFactory;

    protected $table = 'message';

    protected $fillable = ['sender_id', 'recipient_id', 'judul', 'deskripsi', 'sertifikat'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
