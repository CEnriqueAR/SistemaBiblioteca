<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'id_categoria',
        'name',
        'autor',
        'tema',
        'editorial',
        'isvn',
        'total',
        'foto',
        'pdf',
    ];

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
