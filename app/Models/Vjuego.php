<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vjuego extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'imagen',
        'consola',
        'esrb',
        'user_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
