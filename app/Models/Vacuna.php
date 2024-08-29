<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vacuna extends Model
{
    use HasFactory;

    protected $table = 'vacunas';
    protected $fillable = ['tipo', 'precio'];


    public function mascotas(): BelongsToMany
    {
        return $this->belongsToMany(Mascota::class);
    }
}
