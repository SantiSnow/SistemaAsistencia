<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'ultimo_ingreso',
        'temperatura',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
