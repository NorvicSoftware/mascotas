<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    protected $fillable = ['codigo', 'nombre', 'tipo', 'edad', 'raza', 'color', 'pedigri', 'url', 'refugio_id' ];

    public function refugio(): BelongsTo{
        return $this->belongsTo(Refugio::class);
    }

    public function adopcion(): HasOne
    {
        return $this->hasOne(Adopcion::class);
    }

    public function vacunas(): BelongsToMany
    {
        return $this->belongsToMany(Vacuna::class)->withPivot('fecha');;
    }

    
}
