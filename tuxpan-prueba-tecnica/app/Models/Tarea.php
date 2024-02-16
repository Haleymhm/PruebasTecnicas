<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tarea extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_vencimiento',
        'estado',
    ];

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class);
    }

    
}
